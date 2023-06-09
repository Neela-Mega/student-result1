

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
                                    <li><a href="#"> Result</a></li>
                                    <li class="active">Print Result</li>
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
                                <strong class="card-title"><h3 align="center">View/Print Result </h3></strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                       <div class="<?php echo $alertStyle;?>" role="alert"><?php echo $statusMsg;?></div>
                                        <form method="Post" action="">
                                        <div class="row">
                                        <div class="col-6">
                                                    <div class="form-group">
													<!-- Log on to codeastro.com for more projects! -->
                                                        <label for="x_card_code" class="control-label mb-1">Semester</label>
                                                        <input id="" name="semester" type="number" min=1 max=8 class="form-control cc-exp" value=""  placeholder="semester">
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
												<!-- Log on to codeastro.com for more projects! -->
                                                <button type="submit" name="submit" class="btn btn-success">Calculate CGPA&ARREARS</button>
                                            </div>
                                            <br>
                                            <div>
												<!-- Log on to codeastro.com for more projects! -->
                                                <button type="submit" name="submit1" class="btn btn-success">Upadte CGPA&ARREARS</button>
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
                                <strong class="card-title"><h2 align="center">Result</h2></strong>
                            </div>                            
                            <div class="card-body">
                               <table id="bootstrap-data-table" class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th>REG NO</th>
                                        <th>STUDENT NAME</th>
                                        <?php 
                            if(isset($_POST['submit'])){
                                $sem=$_POST['semester'];
                                $creadit=array(0);      
                                switch($sem)
                                {
                                    case 1:                    
                                $query1=mysqli_query($con1,"show columns from first");
                                
                                
                                while($row=mysqli_fetch_array($query1))
                                             {
                                                   
                                                $sub=$row[0];
                                                if($sub!=="REGNO" && $sub!=="NAME" && $sub!=="ARREARS" && $sub!=="CGPA"){                                               
                                                $creadit_query=mysqli_query($con1,"SELECT credits FROM subjects WHERE subjectcode='$sub'");
                                               
                                                $fetch=mysqli_fetch_array($creadit_query);
                                                array_push($creadit,$fetch[0]);
                                                ?>
                                                <th><?php echo $sub; ?></th>
                                                <th>VALUE</th>
                                                <?php
                                                
                                             }
                                            }
                                            break;
                                            
                                            case 2:   
                                                $query1=mysqli_query($con1,"show columns from second");
                                                    
                                                    while($row=mysqli_fetch_array($query1))
                                                                 {
                                                                    $sub=$row[0];
                                                                    if($sub!=="REGNO" && $sub!=="NAME" && $sub!=="ARREARS" && $sub!=="CGPA"){                                               
                                                                    $creadit_query=mysqli_query($con1,"SELECT credits FROM subjects WHERE subjectcode='$sub'");
                                                                    $fetch=mysqli_fetch_array($creadit_query);
                                                                    array_push($creadit,$fetch[0]);
                                                                    ?>
                                                                    <th><?php echo $sub; ?></th>
                                                                    <th>VALUE</th>
                                                                    <?php
                                                                    
                                                                 }
                                                                }
                                                                break;
                                             case 3:   
                                                                    $query1=mysqli_query($con1,"show columns from third");
                                                                        
                                                                        while($row=mysqli_fetch_array($query1))
                                                                                     {
                                                                                        $sub=$row[0];
                                                                                        if($sub!=="REGNO" && $sub!=="NAME" && $sub!=="ARREARS" && $sub!=="CGPA"){                                               
                                                                                        $creadit_query=mysqli_query($con1,"SELECT credits FROM subjects WHERE subjectcode='$sub'");
                                                                                        $fetch=mysqli_fetch_array($creadit_query);
                                                                                        array_push($creadit,$fetch[0]);
                                                                                        ?>
                                                                                        <th><?php echo $sub; ?></th>
                                                                                        <th>VALUE</th>
                                                                                        <?php
                                                                                     }
                                                                                    }
                                                                                    break;
                                                                                    case 4:   
                                                                                        $query1=mysqli_query($con1,"show columns from four");
                                                                                            
                                                                                            while($row=mysqli_fetch_array($query1))
                                                                                                         {
                                                                                                            $sub=$row[0];
                                                                                                            if($sub!=="REGNO" && $sub!=="NAME" && $sub!=="ARREARS" && $sub!=="CGPA"){                                               
                                                                                                            $creadit_query=mysqli_query($con1,"SELECT credits FROM subjects WHERE subjectcode='$sub'");
                                                                                                            $fetch=mysqli_fetch_array($creadit_query);
                                                                                                            array_push($creadit,$fetch[0]);
                                                                                                            ?>
                                                                                                            <th><?php echo $sub; ?></th>
                                                                                                            <th>VALUE</th>
                                                                                                            <?php
                                                                                                         }
                                                                                                        }
                                                                                                        break;
                                                                                                        case 5:   
                                                                                                            $query1=mysqli_query($con1,"show columns from five");
                                                                                                                
                                                                                                                while($row=mysqli_fetch_array($query1))
                                                                                                                             {
                                                                                                                                $sub=$row[0];
                                                                                                                                if($sub!=="REGNO" && $sub!=="NAME" && $sub!=="ARREARS" && $sub!=="CGPA"){                                               
                                                                                                                                $creadit_query=mysqli_query($con1,"SELECT credits FROM subjects WHERE subjectcode='$sub'");
                                                                                                                                $fetch=mysqli_fetch_array($creadit_query);
                                                                                                                                array_push($creadit,$fetch[0]);
                                                                                                                                ?>
                                                                                                                                <th><?php echo $sub; ?></th>
                                                                                                                                <th>VALUE</th>
                                                                                                                                <?php
                                                                                                                             }
                                                                                                                            }
                                                                                                                            break;
                                                                                                                            case 6:   
                                                                                                                                $query1=mysqli_query($con1,"show columns from six");
                                                                                                                                    
                                                                                                                                    while($row=mysqli_fetch_array($query1))
                                                                                                                                                 {
                                                                                                                                                    $sub=$row[0];
                                                                                                                                                    if($sub!=="REGNO" && $sub!=="NAME" && $sub!=="ARREARS" && $sub!=="CGPA"){                                               
                                                                                                                                                    $creadit_query=mysqli_query($con1,"SELECT credits FROM subjects WHERE subjectcode='$sub'");
                                                                                                                                                    $fetch=mysqli_fetch_array($creadit_query);
                                                                                                                                                    array_push($creadit,$fetch[0]);
                                                                                                                                                    ?>
                                                                                                                                                    <th><?php echo $sub; ?></th>
                                                                                                                                                    <th>VALUE</th>
                                                                                                                                                    <?php
                                                                                                                                                 }
                                                                                                                                                }
                                                                                                                                                break;
                                                                                                                                                case 7:   
                                                                                                                                                    $query1=mysqli_query($con1,"show columns from seven");
                                                                                                                                                        
                                                                                                                                                        while($row=mysqli_fetch_array($query1))
                                                                                                                                                                     {
                                                                                                                                                                        $sub=$row[0];
                                                                                                                                                                        if($sub!=="REGNO" && $sub!=="NAME" && $sub!=="ARREARS" && $sub!=="CGPA"){                                               
                                                                                                                                                                        $creadit_query=mysqli_query($con1,"SELECT credits FROM subjects WHERE subjectcode='$sub'");
                                                                                                                                                                        $fetch=mysqli_fetch_array($creadit_query);
                                                                                                                                                                        array_push($creadit,$fetch[0]);
                                                                                                                                                                        ?>
                                                                                                                                                                        <th><?php echo $sub; ?></th>
                                                                                                                                                                        <th>VALUE</th>
                                                                                                                                                                        <?php
                                                                                                                                                                     }
                                                                                                                                                                    }
                                                                                                                                                                    break;
                                                                                                                                                                    case 8:   
                                                                                                                                                                        $query1=mysqli_query($con1,"show columns from eight");
                                                                                                                                                                            
                                                                                                                                                                            while($row=mysqli_fetch_array($query1))
                                                                                                                                                                                         {
                                                                                                                                                                                            $sub=$row[0];
                                                                                                                                                                                            if($sub!=="REGNO" && $sub!=="NAME" && $sub!=="ARREARS" && $sub!=="CGPA"){                                               
                                                                                                                                                                                            $creadit_query=mysqli_query($con1,"SELECT credits FROM subjects WHERE subjectcode='$sub'");
                                                                                                                                                                                            $fetch=mysqli_fetch_array($creadit_query);
                                                                                                                                                                                            array_push($creadit,$fetch[0]);
                                                                                                                                                                                            ?>
                                                                                                                                                                                            <th><?php echo $sub; ?></th>
                                                                                                                                                                                            <th>VALUE</th>
                                                                                                                                                                                            <?php
                                                                                                                                                                                         }
                                                                                                                                                                                        }
                                                                                                                                                                                        break;
                                                                
                            }
                        }
                        
                        
                            ?>
                            
                            
                            <th>CGPA</th>
                            <th>ARREARS</th>
                            </tr>
                                    </thead>
                                    <tbody>
                                      
                            <?php
                           
                            if(isset($_POST['submit']))
                            {
                               
                                $semester=$_POST['semester'];
                                
                                switch($semester)

                                {
                                    case 1:
                                        
                                           $query=mysqli_query($con1,"select * from first ");  
                                           
                                             while($row=mysqli_fetch_array($query))
                                             {
                                                
                                                    ?>
                                <tr>
                               
                                
                                <td><?php  echo $row['REGNO'];?></td>
                                <td><?php  echo $row['NAME'];?></td>
                                 <td><?php  $cgpa=$sub_count=0; echo $row[2];?></td>
                                 <td><?php echo $value=GradeValue($row[2]); $cgpa=cgpa($value,$creadit[1],$cgpa); $sub_count++;?></td>
                                 <td><?php  echo $row[3];?></td>
                                 <td> <?php echo $value=GradeValue($row[3]); $cgpa=cgpa($value,$creadit[2],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[4];?></td>
                                 <td> <?php echo $value=GradeValue($row[4]); $cgpa=cgpa($value,$creadit[3],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[5];?></td>
                                 <td> <?php echo $$value=GradeValue($row[5]); $cgpa=cgpa($value,$creadit[4],$cgpa); $sub_count++; ?> </td>
                                 <td><?php  echo $row[6];?></td>
                                 <td> <?php echo $value=GradeValue($row[6]); $cgpa=cgpa($value,$creadit[5],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[7];?></td>
                                 <td> <?php echo $value=GradeValue($row[7]); $cgpa=cgpa($value,$creadit[6],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[8];?></td>
                                 <td> <?php echo $value=GradeValue($row[8]); $cgpa=cgpa($value,$creadit[7],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[9];?></td>
                                 <td> <?php echo $value=GradeValue($row[9]); $cgpa=cgpa($value,$creadit[8],$cgpa); $sub_count++;?> </td>
                                 <td><?php echo $cgpa;?></td>
                                
                    <?php 
                    
                    } break;
                                  
                                    case 2:
                                       
                                           $query=mysqli_query($con1,"select * from second ");  
                                           
                                             while($row=mysqli_fetch_array($query))
                                             {
                                                
                                                    ?>
                                <tr>
                               
                                
                                <td><?php  echo $row['REGNO'];?></td>
                                <td><?php  echo $row['NAME'];?></td>
                                 <td><?php  $cgpa=$sub_count=0; echo $row[2];?></td>
                                 <td><?php echo $value=GradeValue($row[2]); $cgpa=cgpa($value,$creadit[1],$cgpa); $sub_count++;?></td>
                                 <td><?php  echo $row[3];?></td>
                                 <td> <?php echo $value=GradeValue($row[3]); $cgpa=cgpa($value,$creadit[2],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[4];?></td>
                                 <td> <?php echo $value=GradeValue($row[4]); $cgpa=cgpa($value,$creadit[3],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[5];?></td>
                                 <td> <?php echo $$value=GradeValue($row[5]); $cgpa=cgpa($value,$creadit[4],$cgpa); $sub_count++; ?> </td>
                                 <td><?php  echo $row[6];?></td>
                                 <td> <?php echo $value=GradeValue($row[6]); $cgpa=cgpa($value,$creadit[5],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[7];?></td>
                                 <td> <?php echo $value=GradeValue($row[7]); $cgpa=cgpa($value,$creadit[6],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[8];?></td>
                                 <td> <?php echo $value= GradeValue($row[8]); $cgpa=cgpa($value,$creadit[7],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[9];?></td>
                                 <td> <?php echo $value=GradeValue($row[9]); $cgpa=cgpa($value,$creadit[8],$cgpa); $sub_count++;?> </td>
                                 <td><?php echo $cgpa;?></td>
                                 </tr>
                    <?php 
                    
                    }
                                         break;

                                         case 3:
                                            
                                            
                                           $query=mysqli_query($con1,"select * from third ");  
                                           
                                             while($row=mysqli_fetch_array($query))
                                             {
                                                
                                                    ?>
                                <tr>
                               
                                
                                <td><?php  echo $row['REGNO'];?></td>
                                <td><?php  echo $row['NAME'];?></td>
                                 <td><?php  $cgpa=$sub_count=0; echo $row[2];?></td>
                                 <td><?php echo $value=GradeValue($row[2]); $cgpa=cgpa($value,$creadit[1],$cgpa); $sub_count++;?></td>
                                 <td><?php  echo $row[3];?></td>
                                 <td> <?php echo $value=GradeValue($row[3]); $cgpa=cgpa($value,$creadit[2],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[4];?></td>
                                 <td> <?php echo $value=GradeValue($row[4]); $cgpa=cgpa($value,$creadit[3],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[5];?></td>
                                 <td> <?php echo $$value=GradeValue($row[5]); $cgpa=cgpa($value,$creadit[4],$cgpa); $sub_count++; ?> </td>
                                 <td><?php  echo $row[6];?></td>
                                 <td> <?php echo $value=GradeValue($row[6]); $cgpa=cgpa($value,$creadit[5],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[7];?></td>
                                 <td> <?php echo $value=GradeValue($row[7]); $cgpa=cgpa($value,$creadit[6],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[8];?></td>
                                 <td> <?php echo $value=GradeValue($row[8]); $cgpa=cgpa($value,$creadit[7],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[9];?></td>
                                 <td> <?php echo $value=GradeValue($row[9]); $cgpa=cgpa($value,$creadit[8],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[10];?></td>
                                 <td> <?php echo $value=GradeValue($row[10]); $cgpa=cgpa($value,$creadit[8],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[11];?></td>
                                 
                                 
                                 
                                 <td><?php echo $cgpa;?></td>
                    <?php 
                    
                    }
                                                                                          break;
                                             case 4:
                                                
                                           $query=mysqli_query($con1,"select * from four ");  
                                           
                                             while($row=mysqli_fetch_array($query))
                                             {
                                                
                                                    ?>
                                <tr>
                               
                                
                                <td><?php  echo $row['REGNO'];?></td>
                                <td><?php  echo $row['NAME'];?></td>
                                 <td><?php  $cgpa=$sub_count=0; echo $row[2];?></td>
                                 <td><?php echo $value=GradeValue($row[2]); $cgpa=cgpa($value,$creadit[1],$cgpa); $sub_count++;?></td>
                                 <td><?php  echo $row[3];?></td>
                                 <td> <?php echo $value=GradeValue($row[3]); $cgpa=cgpa($value,$creadit[2],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[4];?></td>
                                 <td> <?php echo $value=GradeValue($row[4]); $cgpa=cgpa($value,$creadit[3],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[5];?></td>
                                 <td> <?php echo $$value=GradeValue($row[5]); $cgpa=cgpa($value,$creadit[4],$cgpa); $sub_count++; ?> </td>
                                 <td><?php  echo $row[6];?></td>
                                 <td> <?php echo $value=GradeValue($row[6]); $cgpa=cgpa($value,$creadit[5],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[7];?></td>
                                 <td> <?php echo $value=GradeValue($row[7]); $cgpa=cgpa($value,$creadit[6],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[8];?></td>
                                 <td> <?php echo $value=GradeValue($row[8]); $cgpa=cgpa($value,$creadit[7],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[9];?></td>
                                 <td> <?php echo $value=GradeValue($row[9]); $cgpa=cgpa($value,$creadit[8],$cgpa); $sub_count++;?> </td>
                                 <td><?php echo $cgpa;?></td>
                    <?php 
                    
                    }
                                                 break;
                                                 case 5:
                                                   
                                           $query=mysqli_query($con1,"select * from five ");  
                                           
                                             while($row=mysqli_fetch_array($query))
                                             {
                                                
                                                    ?>
                                <tr>
                               
                                
                                <td><?php  echo $row['REGNO'];?></td>
                                <td><?php  echo $row['NAME'];?></td>
                                 <td><?php  $cgpa=$sub_count=0; echo $row[2];?></td>
                                 <td><?php echo $value=GradeValue($row[2]); $cgpa=cgpa($value,$creadit[1],$cgpa); $sub_count++;?></td>
                                 <td><?php  echo $row[3];?></td>
                                 <td> <?php echo $value=GradeValue($row[3]); $cgpa=cgpa($value,$creadit[2],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[4];?></td>
                                 <td> <?php echo $value=GradeValue($row[4]); $cgpa=cgpa($value,$creadit[3],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[5];?></td>
                                 <td> <?php echo $$value=GradeValue($row[5]); $cgpa=cgpa($value,$creadit[4],$cgpa); $sub_count++; ?> </td>
                                 <td><?php  echo $row[6];?></td>
                                 <td> <?php echo $value=GradeValue($row[6]); $cgpa=cgpa($value,$creadit[5],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[7];?></td>
                                 <td> <?php echo $value=GradeValue($row[7]); $cgpa=cgpa($value,$creadit[6],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[8];?></td>
                                 <td> <?php echo $value=GradeValue($row[8]); $cgpa=cgpa($value,$creadit[7],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[9];?></td>
                                 <td> <?php echo $value=GradeValue($row[9]); $cgpa=cgpa($value,$creadit[8],$cgpa); $sub_count++;?> </td>
                                 <td><?php echo $cgpa;?></td>
                    <?php 
                    
                    } break;
                                                     case 6:
                                                        
                                           $query=mysqli_query($con1,"select * from six ");  
                                           
                                             while($row=mysqli_fetch_array($query))
                                             {
                                                
                                                    ?>
                                <tr>
                               
                                
                                <td><?php  echo $row['REGNO'];?></td>
                                <td><?php  echo $row['NAME'];?></td>
                                 <td><?php  $cgpa=$sub_count=0; echo $row[2];?></td>
                                 <td><?php echo $value=GradeValue($row[2]); $cgpa=cgpa($value,$creadit[1],$cgpa); $sub_count++;?></td>
                                 <td><?php  echo $row[3];?></td>
                                 <td> <?php echo $value=GradeValue($row[3]); $cgpa=cgpa($value,$creadit[2],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[4];?></td>
                                 <td> <?php echo $value=GradeValue($row[4]); $cgpa=cgpa($value,$creadit[3],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[5];?></td>
                                 <td> <?php echo $$value=GradeValue($row[5]); $cgpa=cgpa($value,$creadit[4],$cgpa); $sub_count++; ?> </td>
                                 <td><?php  echo $row[6];?></td>
                                 <td> <?php echo $value=GradeValue($row[6]); $cgpa=cgpa($value,$creadit[5],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[7];?></td>
                                 <td> <?php echo $value=GradeValue($row[7]); $cgpa=cgpa($value,$creadit[6],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[8];?></td>
                                 <td> <?php echo $value=GradeValue($row[8]); $cgpa=cgpa($value,$creadit[7],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[9];?></td>
                                 <td> <?php echo $value=GradeValue($row[9]); $cgpa=cgpa($value,$creadit[8],$cgpa); $sub_count++;?> </td>
                                 <td><?php echo $cgpa;?></td>
                                 
                    <?php 
                    
                    } break;
                                                         
                                                         case 7:
                                                            
                                           $query=mysqli_query($con1,"select * from seven ");  
                                           
                                             while($row=mysqli_fetch_array($query))
                                             {
                                                
                                                    ?>
                                <tr>
                               
                                
                                <td><?php  echo $row['REGNO'];?></td>
                                <td><?php  echo $row['NAME'];?></td>
                                 <td><?php  $cgpa=$sub_count=0; echo $row[2];?></td>
                                 <td><?php echo $value=GradeValue($row[2]); $cgpa=cgpa($value,$creadit[1],$cgpa); $sub_count++;?></td>
                                 <td><?php  echo $row[3];?></td>
                                 <td> <?php echo $value=GradeValue($row[3]); $cgpa=cgpa($value,$creadit[2],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[4];?></td>
                                 <td> <?php echo $value=GradeValue($row[4]); $cgpa=cgpa($value,$creadit[3],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[5];?></td>
                                 <td> <?php echo $$value=GradeValue($row[5]); $cgpa=cgpa($value,$creadit[4],$cgpa); $sub_count++; ?> </td>
                                 <td><?php  echo $row[6];?></td>
                                 <td> <?php echo $value=GradeValue($row[6]); $cgpa=cgpa($value,$creadit[5],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[7];?></td>
                                 <td> <?php echo $value=GradeValue($row[7]); $cgpa=cgpa($value,$creadit[6],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[8];?></td>
                                 <td> <?php echo $value=GradeValue($row[8]); $cgpa=cgpa($value,$creadit[7],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[9];?></td>
                                 <td> <?php echo $value=GradeValue($row[9]); $cgpa=cgpa($value,$creadit[8],$cgpa); $sub_count++;?> </td>
                                 <td><?php echo $cgpa;?></td>
                    <?php 
                    
                    } break;
                                                             case 8:
                                                                
                                           $query=mysqli_query($con1,"select * from eight ");  
                                           
                                             while($row=mysqli_fetch_array($query))
                                             {
                                                
                                                    ?>
                                <tr>
                               
                                
                                <td><?php  echo $row['REGNO'];?></td>
                                <td><?php  echo $row['NAME'];?></td>
                                 <td><?php  $cgpa=$sub_count=0; echo $row[2];?></td>
                                 <td><?php echo $value=GradeValue($row[2]); $cgpa=cgpa($value,$creadit[1],$cgpa); $sub_count++;?></td>
                                 <td><?php  echo $row[3];?></td>
                                 <td> <?php echo $value=GradeValue($row[3]); $cgpa=cgpa($value,$creadit[2],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[4];?></td>
                                 <td> <?php echo $value=GradeValue($row[4]); $cgpa=cgpa($value,$creadit[3],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[5];?></td>
                                 <td> <?php echo $$value=GradeValue($row[5]); $cgpa=cgpa($value,$creadit[4],$cgpa); $sub_count++; ?> </td>
                                 <td><?php  echo $row[6];?></td>
                                 <td> <?php echo $value=GradeValue($row[6]); $cgpa=cgpa($value,$creadit[5],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[7];?></td>
                                 <td> <?php echo $value=GradeValue($row[7]); $cgpa=cgpa($value,$creadit[6],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[8];?></td>
                                 <td> <?php echo $value=GradeValue($row[8]); $cgpa=cgpa($value,$creadit[7],$cgpa); $sub_count++;?> </td>
                                 <td><?php  echo $row[9];?></td>
                                 <td> <?php echo $value=GradeValue($row[9]); $cgpa=cgpa($value,$creadit[8],$cgpa); $sub_count++;?> </td>
                                 <td><?php echo $cgpa;?></td>
                    <?php 
                    
                    } break;
                                 default :
                                 echo"try again........";
                                 
                
            
                                          }
                                         } 
                                        
                                         function GradeValue($subgrade){
                                            switch($subgrade)
                                            {
                                                case '0':
                                                    $value=10;
                                                    echo $value;
                                                    break;
                                                    case 'O':
                                                        $value=10;
                                                        echo $value;
                                                        break;
                                                    case 'A+':
                                                        $value=9;
                                                        echo $value;
                                                        break;
                                                        case 'A':
                                                            $value=8;
                                                            echo $value;
                                                            break;
                                                            case 'B+':
                                                                $value=7;
                                                                echo $value;
                                                                break;
                                                                case 'B':
                                                                    $value=6;
                                                                    echo $value;
                                                                    break;
                                                                    case 'C':
                                                                        $value=5;
                                                                        echo $value;
                                                                        break;
                                                                        case 'U':
                                                                            $value=0;
                                                                            echo $value;
                                                                            break;
                                            }
                                            
                                         }
                                        function cgpa($value,$creadit,$cgpa){
                                            if($value!=0){
                                            $cgpa+=$value*$creadit;
                                            echo $cgpa;
                                            }                                        
                                            else{
                                                $arrear_flag=1;
                                            }
                                            if($arrear_flag==1){
                                                $cgpa=0;
                                            }
                                        
                                            return $cgpa;
                                         }
                                         ?>

            
            
                                         
                    
                   
                    
                    
                                                                                            
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
<!-- end of datatable -->

            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

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
