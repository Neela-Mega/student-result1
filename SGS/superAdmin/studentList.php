
<?php

    include('../includes/dbconnection1.php');
    include('../includes/session.php');
    error_reporting(0);
    
     

  ?>

<!doctype html>
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include 'includes/title.php';?>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="../assets/img/student-grade.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style2.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
<script>
function showValues(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        
        xmlhttp.open("GET","ajaxCall2.php?fid="+str,true);
        xmlhttp.send();
    }
}

    
</script>
</head>
<body>
    <!-- Left Panel -->
    <?php $page="result"; include 'includes/leftMenu.php';?>

   <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
            <?php include 'includes/header.php';?>
        <!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
							<!-- Log on to codeastro.com for more projects! -->
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Result</a></li>
                                    <li class="active">View/Update Result</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
							<!-- Log on to codeastro.com for more projects! -->
                                <strong class="card-title"><h3 align="center">View/Update Result </h3></strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                       <div class="<?php echo $alertStyle;?>" role="alert"><?php echo $statusMsg;?></div>
                                        <form method="Post" action="">
                                        <label for="x_card_code" class="control-label mb-1">Section</label>
                                                    
                                                    <input type="radio" name="section" value="A" required>A</input>
                                                    <input type="radio" name="section" value="B">B</input>
                                                    <input type="radio" name="section" value="ALL">ALL</input>
                                            
                                         <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                    <label for="x_card_code" class="control-label mb-1">Subject code</label>
                                                    <?php 
                                                    $query=mysqli_query($con1,"select * from subjects ORDER BY subjectcode ASC");                        
                                                    $count = mysqli_num_rows($query);
                                                    if($count > 0){                       
                                                        echo ' <select required name="subjectcode"  onchange="showValues(this.value)" class="custom-select form-control">';
                                                        echo'<option value="">--Select subjectcode--</option>';
                                                        while ($row = mysqli_fetch_array($query)) {
                                                        echo'<option value="'.$row['subjectcode'].'" >'.$row['subjectcode'].'</option>';
                                                            }
                                                                echo '</select>';
                                                            }
                                                    ?>                                                     
                                                 </div>
                                                </div>
                                                 <div class="col-6">
                                                    <div class="form-group">
                                                   <?php
                                                        echo"<div id='txtHint'></div>";
                                                    ?>                                    
                                                 </div>
                                                </div>
                                             </div>
                                                <div>
												
                                                <button type="submit" name="submit" class="btn btn-success">View Result</button>
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- .card -->
                    </div><!--/.col-->
               

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><h2 align="center">All Student</h2></strong>
                            </div>
                           
                            <div class="card-body">
                               <table id="bootstrap-data-table" class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Reg.no</th>
                                            <th>Student Name</th>
                                            <th>Grade </th>
                                            <th>Actions</th>
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>  
                                      
                            <?php
                                               
                             
                            if(!empty($_POST['subjectcode']))
                             {
                                $code=$_POST['subjectcode'];
                                $semester=$_POST['semester'];
                                $cnt=$student_present=$student_count=$student_pass=$o_grade=$aplus_grade=$a_grade=$bplus_grade=$b_grade=$c_grade=0;
                                $section=$_POST['section'];
                                switch($section){
                                    case 'A':
                                        $sec="'A'";
                                        break;
                                    case 'B':
                                        $sec="'B'";
                                        break;
                                    case 'ALL':
                                        $sec="'A','B'";
                                        break;
                                }
                                switch($semester)
                                {
                                    case 1:                                        
                                        $ret=mysqli_query($con1,"SELECT t1.REGNO,t1.NAME,t1.$code from first t1 JOIN students t2 ON t1.REGNO=t2.regno WHERE t2.section IN ($sec)");
                                        $sem="first";
                                        break;
                                    case 2:
                                        $ret=mysqli_query($con1,"SELECT t1.REGNO,t1.NAME,t1.$code from second t1 JOIN students t2 ON t1.REGNO=t2.regno WHERE t2.section IN ($sec)");     
                                        $sem="second";
                                        break;
                                    case 3:   
                                        $ret=mysqli_query($con1,"SELECT t1.REGNO,t1.NAME,t1.$code from third t1 JOIN students t2 ON t1.REGNO=t2.regno WHERE t2.section IN ($sec)");
                                        $sem="third";
                                        break;
                                    case 4:   
                                        $ret=mysqli_query($con1,"SELECT t1.REGNO,t1.NAME,t1.$code from four t1 JOIN students t2 ON t1.REGNO=t2.regno WHERE t2.section IN ($sec)");
                                        $sem="four";
                                        break;
                                    case 5:   
                                        $ret=mysqli_query($con1,"SELECT t1.REGNO,t1.NAME,t1.$code from five t1 JOIN students t2 ON t1.REGNO=t2.regno WHERE t2.section IN ($sec)");
                                        $sem="five";
                                        break;
                                    case 6:   
                                        $ret=mysqli_query($con1,"SELECT t1.REGNO,t1.NAME,t1.$code from six t1 JOIN students t2 ON t1.REGNO=t2.regno WHERE t2.section IN ($sec)");
                                        $sem="six";
                                        break;
                                    case 7:   
                                        $ret=mysqli_query($con1,"SELECT t1.REGNO,t1.NAME,t1.$code from seven t1 JOIN students t2 ON t1.REGNO=t2.regno WHERE t2.section IN ($sec)");
                                        $sem="seven";
                                        break;
                                    case 8:   
                                        $ret=mysqli_query($con1,"SELECT t1.REGNO,t1.NAME,t1.$code from eight t1 JOIN students t2 ON t1.REGNO=t2.regno WHERE t2.section IN ($sec)");
                                        $sem="eight";
                                        break;
                                 }
                                while($row=mysqli_fetch_array($ret))
                                {      
                                    ?>   
                                                      
                                        
                    <tr>
                    <td><?php echo ++$cnt;?></td>                    
                    <td><?php  echo $row['REGNO'];?></td>
                    <td><?php  echo $row['NAME'];?></td>
                    <td><?php  echo $row[$code];?></td>
                    <td><a href="editResult.php?editResultId=<?php echo $row['REGNO'];?>&subcode=<?php echo $code;?>&sem=<?php echo $sem;?>" title="Edit Details"><i class="fa fa-edit fa-1x"></i></a></td>
                    
                    
                   
                    
                    </tr>
                                
                    <?php
                    $student_count++;
                    if($row[$code] !='UA'){
                        $student_present++;
                        if($row[$code] !='U'){
                            $student_pass++;
                            if($row[$code] =='O'){
                            $o_grade++;}
                            if($row[$code] =='A'){
                            $a_grade++;}
                            if($row[$code] =='A+'){
                            $aplus_grade++;}
                            if($row[$code] =='B'){
                            $b_grade++;}
                            if($row[$code] =='B+'){
                            $bplus_grade++;}
                            if($row[$code] =='C'){
                            $c_grade++;}
                        }
                    }
                        }
                            
                ?>
                
                </tbody>
                            </table>   

<br>
                                                    </div>    
                                                  
                                
                            </div>
                        </div>
                    </div>
<!-- end of datatable -->

<BR>
                                                        <form action="#" method="post">
                            <div class="row">
                                            <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1"> NUMBER OF STUDENTS PRESENT</label>
                                                        <input id="" name="present" type="tel" class="form-control cc-cvc" value="<?php echo $student_present;?>" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" placeholder=" ">
                                                        </div>
                                                        <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1"> NUMBER OF STUDENTS FAIL</label>
                                                        <input id="" name="fail" type="tel" class="form-control cc-cvc" value="<?php echo $student_present-$student_pass;?>" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" placeholder=" ">
                                                        </div>
                                                        </div> 
                                                <BR>
                                                <div class="row">
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">NUMBER OF STUDENTS ABSENT</label>
                                                        <input id="" name="absent" type="tel" class="form-control cc-cvc" value="<?php echo $student_count-$student_present;?>" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" placeholder=" ">
                                                        </div>
                                                        <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">NUMBER OF STUDENTS PASS</label>
                                                        <input id="" name="pass" type="tel" class="form-control cc-cvc" value="<?php echo $student_pass;?>" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" placeholder=" ">
                                                        </div>
                                                    </div>   
                                                    <br>  
                                                    <div class="row">
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">PERCENTAGE</label>
                                                        <input id="" name="percentage" type="tel" class="form-control cc-cvc" value="<?php echo ($student_pass/$student_present)*100;?>" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" placeholder=" ">
                                                        </div>
                                                        <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">STUDENTS HAVE O GRADE</label>
                                                        <input id="" name="o" type="tel" class="form-control cc-cvc" value="<?php echo $o_grade ;?>" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" placeholder=" ">
                                                        </div>
                    </div>
                    <br>  
                                                    <div class="row">
                                                        <div class="col-6">
                                                            
                                                    <label for="x_card_code" class="control-label mb-1">STUDENTS HAVE A+ GRADE</label>
                                                        <input id="" name="aplus" type="tel" class="form-control cc-cvc" value="<?php echo $aplus_grade;?>" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" placeholder=" ">
                                                        </div>
                                                        
                                                        <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">STUDENTS HAVE A GRADE</label>
                                                        <input id="" name="a" type="tel" class="form-control cc-cvc" value="<?php echo $a_grade ;?>" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" placeholder=" ">
                                                        </div>
                                                        </div>
                    <br>  
                                                    <div class="row">
                                                        <div class="col-6">
                                                            
                                                    <label for="x_card_code" class="control-label mb-1">STUDENTS HAVE B+ GRADE</label>
                                                        <input id="" name="bplus" type="tel" class="form-control cc-cvc" value="<?php echo $bplus_grade;?>" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" placeholder=" ">
                                                        </div>
                                                        
                                                        <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">STUDENTS HAVE B GRADE</label>
                                                        <input id="" name="b" type="tel" class="form-control cc-cvc" value="<?php echo $b_grade ;?>" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" placeholder=" ">
                                                        </div>
                                                        </div>
                    <br>  
                                                    <div class="row">
                                                        <div class="col-6">
                                                            
                                                    <label for="x_card_code" class="control-label mb-1">STUDENTS HAVE C GRADE</label>
                                                        <input id="" name="c" type="tel" class="form-control cc-cvc" value="<?php echo $c_grade;?>" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" placeholder=" ">
                                                        </div>
                                                        <input type="hidden" name="staff" value="<?php echo $_POST['facultyName']?>">
                                                        <input type="hidden" name="code" value="<?php echo $code;?>">
                                                        <input type="hidden" name="sec" value="<?php echo $section;?>">
                                                        <input type="hidden" name="student_count" value="<?php echo $student_count;?>">
                                                        <button type="submit" name="submit1" class="btn btn-success" >Save Result</button>
                                                        </form>
                    </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
    
    <?php 
                             }
                             if(isset($_POST['submit1'])){
                                $sec=$_POST['sec'];
                                $code=$_POST['code'];
                                $total_student=$_POST['student_count'];
                                $student_appear=$_POST['present'];
                                $pass=$_POST['pass'];
                                $fail=$_POST['fail'];
                                $percentage=$_POST['percentage'];
                                $staff=$_POST['staff'];
                                switch($sec){
                                case 'A':
                                    mysqli_query($con1,"UPDATE sectiona SET TOTALSTUDENT=$total_student, STUDENTAPPEAR=$student_appear, STUDENTPASS=$pass, STUDENTFAIL=$fail, PERCENTAGE=$percentage, STAFFANAME='$staff' WHERE SUBJECTCODE='$code'");
                                    break;
                                case 'B';
                                    mysqli_query($con1,"UPDATE sectionb SET TOTALSTUDENT=$total_student, STUDENTAPPEAR=$student_appear, STUDENTPASS=$pass, STUDENTFAIL=$fail, PERCENTAGE=$percentage, STAFFNAME='$staff' WHERE SUBJECTCODE='$code'");
                                    break;
                                case 'ALL':
                                    mysqli_query($con1,"UPDATE section SET TOTALSTUDENT=$total_student, STUDENTAPPEAR=$student_appear, STUDENTPASS=$pass, STUDENTFAIL=$fail, PERCENTAGE=$percentage, STAFFANAME='$staff' WHERE SUBJECTCODE='$code'");
                                    break;
                             }
                            }
                            
    ?>

    <div class="clearfix"></div>

        <?php include 'includes/footer.php';?>


</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="../assets/js/main.js"></script>

<script src="../assets/js/lib/data-table/datatables.min.js"></script>
    <script src="../assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="../assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="../assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="../assets/js/lib/data-table/jszip.min.js"></script>
    <script src="../assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="../assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="../assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="../assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="../assets/js/init/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );

      // Menu Trigger
      $('#menuToggle').on('click', function(event) {
            var windowWidth = $(window).width();   		 
            if (windowWidth<1010) { 
                $('body').removeClass('open'); 
                if (windowWidth<760){ 
                $('#left-panel').slideToggle(); 
                } else {
                $('#left-panel').toggleClass('open-menu');  
                } 
            } else {
                $('body').toggleClass('open');
                $('#left-panel').removeClass('open-menu');  
            } 
                
            }); 

      
  </script>

</body>
</html>
