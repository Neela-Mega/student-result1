
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
        
        xmlhttp.open("GET","ajaxCall.php?fid1="+str,true);
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
                                    <li><a href="#">Compute Result</a></li>
                                    <li class="active">Compute Result</li>
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
                                <strong class="card-title"><h3 align="center">View Result </h3></strong>
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
                                                    <label for="x_card_code" class="control-label mb-1">Enter Register Number</label>
                                                    <?php 
                                                    $query=mysqli_query($con1,"select * from students ORDER BY regno ASC");                        
                                                    $count = mysqli_num_rows($query);
                                                    if($count > 0){                       
                                                        echo ' <select required name="regno"  onchange="showValues(this.value)" class="custom-select form-control">';
                                                        echo'<option value="">--Select Register Number--</option>';
                                                        while ($row = mysqli_fetch_array($query)) {
                                                        echo'<option value="'.$row['regno'].'" >'.$row['regno'].'</option>';
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
												<!-- Log on to codeastro.com for more projects! -->
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
                                <strong class="card-title"><h2 align="center"> I SEMESTER</h2></strong>
                            </div>
                            <div class="card-body">
                               <table id="" class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th>Register Number</th>
                                            
                                            <th>Student Name</th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>  
                                      
                            <?php
                                               
                             
                                               if(isset($_POST['submit']))
                                               {
                                                  
                                                   $reg=$_POST['regno'];
                                                   
                                                   $query=mysqli_query($con1,"select * from first where REGNO=$reg");  
                                                   
                                                     while($row=mysqli_fetch_array($query))
                                                     {
                                                        
                                                            ?>
                                        <tr>
                                <tr>
                               
                                <td><?php  echo $row['REGNO'];?></td>
                                
                                <td><?php  echo $row['NAME'];?></td>
                                 <td><?php  echo $row[2];?></td>
                                 
                                 <td><?php  echo $row[3];?></td>
                                 
                                 <td><?php  echo $row[4];?></td>
                                 
                                 <td><?php  echo $row[5];?></td>
                                 
                                 <td><?php  echo $row[6];?></td>
                                 
                                 <td><?php  echo $row[7];?></td>
                                 
                                 <td><?php  echo $row[8];?></td>
                                 
                                 <td><?php  echo $row[9];?></td>
                                 
                                 <td><?php  echo $row[10];?></td>
                                 <td><?php  echo $row[11];?></td>
                                 
                                 <td><?php  echo $row[12];?></td>
                                 </tr>
                    <?php 
                                
                                
                                                     }
                             }
                ?>
                
                </tbody>
                            </table>
                            </div>
                            </div>
                            </div>
                            <div class="col-md-12">
                        <div class="card">
                             
                            <div class="card-header">
                                <strong class="card-title"><h2 align="center"> II SEMESTER</h2></strong>
                            </div>
                            <div class="card-body">
                               <table id="" class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th>Register Number</th>
                                            
                                            <th>Student Name</th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>

                                            
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>  
                                      
                            <?php
                                               
                             
                                               if(isset($_POST['submit']))
                                               {
                                                  
                                                   $reg=$_POST['regno'];
                                                   $query=mysqli_query($con1,"select * from second where REGNO=$reg");  
                                                   
                                                   while($row=mysqli_fetch_array($query))
                                                   {
                                                      
                                                          ?>
                                <tr>
                               
                                <td><?php  echo $row['REGNO'];?></td>
                                
                                <td><?php  echo $row['NAME'];?></td>
                                 <td><?php  echo $row[2];?></td>
                                 
                                 <td><?php  echo $row[3];?></td>
                                 
                                 <td><?php  echo $row[4];?></td>
                                 
                                 <td><?php  echo $row[5];?></td>
                                 
                                 <td><?php  echo $row[6];?></td>
                                 
                                 <td><?php  echo $row[7];?></td>
                                 
                                 <td><?php  echo $row[8];?></td>
                                 
                                 <td><?php  echo $row[9];?></td>
                                 
                                 <td><?php  echo $row[10];?></td>
                                 <td><?php  echo $row[11];?></td>
                                 
                                 <td><?php  echo $row[12];?></td>
                                 </tr>
                    <?php 
                                
                                
                    
                             }
                            }
                ?>
                
                </tbody>
                            </table>  
                            </div>
                            </div>
                            </div>  
                            <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><h2 align="center"> III SEMESTER</h2></strong>
                            </div>
                            <div class="card-body">
                               <table id="" class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th>Register Number</th>
                                            
                                            <th>Student Name</th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>

                                            
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>  
                                      
                            <?php
                                               
                             
                                               if(isset($_POST['submit']))
                                               {
                                                  
                                                   $reg=$_POST['regno'];
                                                   $query=mysqli_query($con1,"select * from third where REGNO=$reg");  
                                                   
                                                   while($row=mysqli_fetch_array($query))
                                                   {
                                                      
                                                          ?>
                                <tr>
                               
                                <td><?php  echo $row['REGNO'];?></td>
                                
                                <td><?php  echo $row['NAME'];?></td>
                                 <td><?php  echo $row[2];?></td>
                                 
                                 <td><?php  echo $row[3];?></td>
                                 
                                 <td><?php  echo $row[4];?></td>
                                 
                                 <td><?php  echo $row[5];?></td>
                                 
                                 <td><?php  echo $row[6];?></td>
                                 
                                 <td><?php  echo $row[7];?></td>
                                 
                                 <td><?php  echo $row[8];?></td>
                                 
                                 <td><?php  echo $row[9];?></td>
                                 
                                 <td><?php  echo $row[10];?></td>
                                 <td><?php  echo $row[11];?></td>
                                 
                                 <td><?php  echo $row[12];?></td>
                                 </tr>
                    <?php 
                                
                                
                    
                             }
                            }
                ?>
                
                </tbody>
                            </table>    
                            </div>
                            </div>
                            </div>
                            <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><h2 align="center"> IV SEMESTER</h2></strong>
                            </div>
                            <div class="card-body">
                               <table id="" class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th>Register Number</th>
                                            
                                            <th>Student Name</th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>

                                            
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>  
                                      
                            <?php
                                               
                             
                                               if(isset($_POST['submit']))
                                               {
                                                  
                                                   $reg=$_POST['regno'];
                                                   $query=mysqli_query($con1,"select * from four where REGNO=$reg");  
                                                   
                                                   while($row=mysqli_fetch_array($query))
                                                   {
                                                      
                                                          ?>
                                <tr>
                               
                                <td><?php  echo $row['REGNO'];?></td>
                                
                                <td><?php  echo $row['NAME'];?></td>
                                 <td><?php  echo $row[2];?></td>
                                 
                                 <td><?php  echo $row[3];?></td>
                                 
                                 <td><?php  echo $row[4];?></td>
                                 
                                 <td><?php  echo $row[5];?></td>
                                 
                                 <td><?php  echo $row[6];?></td>
                                 
                                 <td><?php  echo $row[7];?></td>
                                 
                                 <td><?php  echo $row[8];?></td>
                                 
                                 <td><?php  echo $row[9];?></td>
                                 
                                 <td><?php  echo $row[10];?></td>
                                 <td><?php  echo $row[11];?></td>
                                 
                                 <td><?php  echo $row[12];?></td>
                                 </tr>
                    <?php 
                                
                                
                    
                             }
                            }
                ?>
                
                </tbody>
                            </table>  
                            </div>
                            </div>
                            </div>  
                            <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><h2 align="center"> V SEMESTER</h2></strong>
                            </div>
                            <div class="card-body">
                               <table id="" class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th>Register Number</th>
                                            
                                            <th>Student Name</th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>

                                            
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>  
                                      
                            <?php
                                               
                             
                                               if(isset($_POST['submit']))
                                               {
                                                  
                                                   $reg=$_POST['regno'];
                                                   $query=mysqli_query($con1,"select * from five where REGNO=$reg");  
                                                   
                                                   while($row=mysqli_fetch_array($query))
                                                   {
                                                      
                                                          ?>
                                <tr>
                               
                                <td><?php  echo $row['REGNO'];?></td>
                                
                                <td><?php  echo $row['NAME'];?></td>
                                 <td><?php  echo $row[2];?></td>
                                 
                                 <td><?php  echo $row[3];?></td>
                                 
                                 <td><?php  echo $row[4];?></td>
                                 
                                 <td><?php  echo $row[5];?></td>
                                 
                                 <td><?php  echo $row[6];?></td>
                                 
                                 <td><?php  echo $row[7];?></td>
                                 
                                 <td><?php  echo $row[8];?></td>
                                 
                                 <td><?php  echo $row[9];?></td>
                                 
                                 <td><?php  echo $row[10];?></td>
                                 <td><?php  echo $row[11];?></td>
                                 
                                 <td><?php  echo $row[12];?></td>
                                 </tr>
                    <?php 
                                
                                
                    
                             }
                            }
                ?>
                
                </tbody>
                            </table>    
                            </div>
                            </div>
                            </div>
                            <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><h2 align="center"> VI SEMESTER</h2></strong>
                            </div>
                            <div class="card-body">
                               <table id="" class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th>Register Number</th>
                                            
                                            <th>Student Name</th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>

                                            
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>  
                                      
                            <?php
                                               
                             
                                               if(isset($_POST['submit']))
                                               {
                                                  
                                                   $reg=$_POST['regno'];
                                                   $query=mysqli_query($con1,"select * from six where REGNO=$reg");  
                                                   
                                                   while($row=mysqli_fetch_array($query))
                                                   {
                                                      
                                                          ?>
                                <tr>
                               
                                <td><?php  echo $row['REGNO'];?></td>
                                
                                <td><?php  echo $row['NAME'];?></td>
                                 <td><?php  echo $row[2];?></td>
                                 
                                 <td><?php  echo $row[3];?></td>
                                 
                                 <td><?php  echo $row[4];?></td>
                                 
                                 <td><?php  echo $row[5];?></td>
                                 
                                 <td><?php  echo $row[6];?></td>
                                 
                                 <td><?php  echo $row[7];?></td>
                                 
                                 <td><?php  echo $row[8];?></td>
                                 
                                 <td><?php  echo $row[9];?></td>
                                 
                                 <td><?php  echo $row[10];?></td>
                                 <td><?php  echo $row[11];?></td>
                                 
                                 <td><?php  echo $row[12];?></td>
                                 </tr>
                    <?php 
                                
                                
                    
                             }
                            }
                ?>
                
                </tbody>
                            </table>    
                            </div>
                            </div>
                            </div>
                            <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><h2 align="center"> VII SEMESTER</h2></strong>
                            </div>
                            <div class="card-body">
                               <table id="" class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th>Register Number</th>
                                            
                                            <th>Student Name</th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>  
                                      
                            <?php
                                               
                             
                                               if(isset($_POST['submit']))
                                               {
                                                  
                                                   $reg=$_POST['regno'];
                                                   $query=mysqli_query($con1,"select * from seven where REGNO=$reg");  
                                                   
                                                   while($row=mysqli_fetch_array($query))
                                                   {
                                                      
                                                          ?>
                                <tr>
                               
                                <td><?php  echo $row['REGNO'];?></td>
                                
                                <td><?php  echo $row['NAME'];?></td>
                                 <td><?php  echo $row[2];?></td>
                                 
                                 <td><?php  echo $row[3];?></td>
                                 
                                 <td><?php  echo $row[4];?></td>
                                 
                                 <td><?php  echo $row[5];?></td>
                                 
                                 <td><?php  echo $row[6];?></td>
                                 
                                 <td><?php  echo $row[7];?></td>
                                 
                                 <td><?php  echo $row[8];?></td>
                                 
                                 <td><?php  echo $row[9];?></td>
                                 
                                 <td><?php  echo $row[10];?></td>
                                 <td><?php  echo $row[11];?></td>
                                 
                                 <td><?php  echo $row[12];?></td>
                                 </tr>
                    <?php 
                                
                                
                    
                             }
                            }
                ?>
                
                </tbody>
                            </table>  
                            </div>
                            </div>
                            </div>  
                            <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><h2 align="center"> VIII SEMESTER</h2></strong>
                            </div>
                            <div class="card-body">
                               <table id="" class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th>Register Number</th>
                                            
                                            <th>Student Name</th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>

                                            
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>  
                                      
                            <?php
                                               
                             
                                               if(isset($_POST['submit']))
                                               {
                                                  
                                                   $reg=$_POST['regno'];
                                                   $query=mysqli_query($con1,"select * from eight where REGNO=$reg");  
                                                   
                                                   while($row=mysqli_fetch_array($query))
                                                   {
                                                      
                                                          ?>
                                <tr>
                               
                                <td><?php  echo $row['REGNO'];?></td>
                                
                                <td><?php  echo $row['NAME'];?></td>
                                 <td><?php  echo $row[2];?></td>
                                 
                                 <td><?php  echo $row[3];?></td>
                                 
                                 <td><?php  echo $row[4];?></td>
                                 
                                 <td><?php  echo $row[5];?></td>
                                 
                                 <td><?php  echo $row[6];?></td>
                                 
                                 <td><?php  echo $row[7];?></td>
                                 
                                 <td><?php  echo $row[8];?></td>
                                 
                                 <td><?php  echo $row[9];?></td>
                                 
                                 <td><?php  echo $row[10];?></td>
                                 <td><?php  echo $row[11];?></td>
                                 
                                 <td><?php  echo $row[12];?></td>
                                 </tr>
                    <?php 
                                
                                
                    
                             }
                            }
                ?>
                
                </tbody>
                            </table>                                                    
                                
                            </div>
                        </div>
                    </div>

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
