<?php
include('../includes/dbconnection1.php');
error_reporting(0);
                    $sems=array("first","second","third");                     
                        for($i=0;$i<3;$i++){
                                $print_sem="SEM".$i+1;
                                $print_CGPA="CGPA".$i+1;
                                $sub_count=0;
                                $creadit=array(0); 
                                $query1=mysqli_query($con1,"show columns from $sems[$i]");                          
                                //$query1=mysqli_query($con1,"show columns from first");
                                while($row=mysqli_fetch_array($query1))
                                             {                                                   
                                                $sub=$row[0];
                                                if($sub!=="REGNO" && $sub!=="NAME" && $sub!=="ARREARS" && $sub!=="CGPA"){                                               
                                                $creadit_query=mysqli_query($con1,"SELECT credits FROM subjects WHERE subjectcode='$sub'");                                               
                                                $fetch=mysqli_fetch_array($creadit_query);
                                                array_push($creadit,$fetch[0]);
                                                $sub_count++;
                                                }
                                            }
                                            $query3=mysqli_query($con1,"select * from  $sems[$i]");
                                            //$query3=mysqli_query($con1,"select * from  first");
                                            $total_creadit=array_sum($creadit); 
                                            while($row=mysqli_fetch_array($query3))
                                             {
                                                $REG=$row['REGNO'];
                                                $cgpa=$arrear_flag=$no_of_arrears=0;
                                                for($j=2;$j<$sub_count+2;$j++){
                                                    $value=GradeValue($row[$j]); 
                                                    $cgpa=cgpa($value,$creadit[$j-1],$cgpa);
                                                }
                                                if($arrear_flag!=1) 
                                                    $final_cgpa= number_format($cgpa/$total_creadit,2,'.',''); 
                                                else 
                                                $final_cgpa= 0;
                                                $query4=mysqli_query($con1,"UPDATE print t1 JOIN $sems[$i] t2 ON t1.REGNO=t2.REGNO SET t1.$print_CGPA=$final_cgpa,t2.CGPA=$final_cgpa WHERE t1.REGNO=$REG");
                                                $query4=mysqli_query($con1,"UPDATE print t1 JOIN $sems[$i] t2 ON t1.REGNO=t2.REGNO SET t1.$print_sem=$no_of_arrears,t2.ARREARS=$no_of_arrears WHERE t1.REGNO=$REG");
                                            }
                                        }
                                        //CALCULATE TOTAL NO OF ARRAY
                                        mysqli_query($con1,"UPDATE print t1 SET TOTAL=(SELECT SUM(SEM1)+SUM(SEM2)+SUM(SEM3)+SUM(SEM4)+SUM(SEM5)+SUM(SEM6)+SUM(SEM7)+SUM(SEM8) FROM print WHERE REGNO=t1.REGNO);");
                                        //CALCULATE CULATIVE CGPA


                                        function GradeValue($subgrade){
                                            switch($subgrade)
                                            {
                                               
                                                    case 'O':
                                                        return 10;
                                                        break;
                                                    case 'A+':
                                                        return 9;
                                                        break;
                                                        case 'A':
                                                            return 8;
                                                            break;
                                                            case 'B+':
                                                                return 7;
                                                                break;
                                                                case 'B':
                                                                    return 6;
                                                                    break;
                                                                    case 'C':
                                                                        return 5;
                                                                        break;
                                                                        case 'U':
                                                                            $value='-';
                                                                           //echo $value;
                                                                            return $value;
                                                                            break;
                                                                            case 'UA':
                                                                                return 'AB';
                                                                                break;
                                                                        }
                                            
                                         }
                                        function cgpa($value,$creadit,$cgpa){
                                            if($value!='-' && $value!='AB'){
                                            $cgpa+=$value*$creadit;
                                            }                                        
                                            else{
                                               global $arrear_flag,$no_of_arrears;
                                               $arrear_flag=1;
                                               $no_of_arrears+=1;
                                            }
                                            if($arrear_flag==1){
                                                $cgpa=0;
                                            }
                                        
                                            return $cgpa;
                                         }
                                                
                                         /*echo "<script type = \"text/javascript\">
                                         window.location = (\"studentList.php\")
                                         </script>"; */
                                         ?>