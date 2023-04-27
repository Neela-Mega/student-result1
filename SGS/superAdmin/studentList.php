
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
                                $cnt=1;
                                
                                switch($semester)
                                {
                                    case 1:                                        
                                        $ret=mysqli_query($con1,"SELECT first.REGNO,first.NAME,$code from first");
                                        $sem="first";
                                        break;
                                    case 2:
                                        $ret=mysqli_query($con1,"SELECT second.REGNO,second.NAME,$code from second");     
                                        $sem="second";
                                        break;
                                    case 3:   
                                        $ret=mysqli_query($con1,"SELECT third.REGNO,third.NAME,$code from third");
                                        $sem="third";
                                        break;
                                    case 4:   
                                        $ret=mysqli_query($con1,"SELECT four.REGNO,four.NAME,$code from four");
                                        $sem="four";
                                        break;
                                    case 5:   
                                        $ret=mysqli_query($con1,"SELECT five.REGNO,five.NAME,$code from five");
                                        $sem="five";
                                        break;
                                    case 6:   
                                        $ret=mysqli_query($con1,"SELECT six.REGNO,six.NAME,$code from six");
                                        $sem="six";
                                        break;
                                    case 7:   
                                        $ret=mysqli_query($con1,"SELECT seven.REGNO,seven.NAME,$code from seven");
                                        $sem="seven";
                                        break;
                                    case 8:   
                                        $ret=mysqli_query($con1,"SELECT eight.REGNO,eight.NAME,$code from eight");
                                        $sem="eight";
                                        break;
                                 }//switch kku ullaye while ah run panna venam mam.. switch ulla query ah mattum select pannittu velila
                                 //comman ah oru while run panna pothum mam.
                                while($row=mysqli_fetch_array($ret))
                                {
                                    

                                ?>   
                                                      
                                        
                    <tr>
                    <td><?php echo $cnt;?></td>
                    
                    <td><?php  echo $row['REGNO'];?></td>
                    <td><?php  echo $row['NAME'];?></td>
                    <td><?php  echo $row[$code];?></td>
                    <td><a href="editResult.php?editResultId=<?php echo $row['REGNO'];?>&subcode=<?php echo $code;?>&sem=<?php echo $sem;?>" title="Edit Details"><i class="fa fa-edit fa-1x"></i></a></td>
                    
                    
                   
                    
                    </tr>
                                
                    <?php 
                    $cnt=$cnt+1;
                    
                        }
                        
                             }
                            
                ?>
                
                </tbody>
                            </table>   

<br>
                            <div>
												<!-- Log on to codeastro.com for more projects! -->
                                                <button type="submit" name="percent" class="btn btn-success" >CALCULATE PERCENTAGE</button>
                                            </div>
                            <BR>
                            <div class="row">
                                            <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1"> NUMBER OF STUDENTS PRESENT</label>
                                                        <input id="" name="present" type="tel" class="form-control cc-cvc" value="" Required data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" placeholder=" ">
                                                        </div>
                                                        </div> 
                                                <BR>
                                                <div class="row">
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">NUMBER OF STUDENTS ABSENT</label>
                                                        <input id="" name="absent" type="tel" class="form-control cc-cvc" value="" Required data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" placeholder=" ">
                                                        </div>
                                                        
                                                    </div>   
                                                    <br>  
                                                    <div class="row">
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">PERCENTAGE</label>
                                                        <input id="" name="percentage" type="tel" class="form-control cc-cvc" value="" Required data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" placeholder=" ">
                                                        </div>
                                                        
                                                    </div>                                                    
                                
                            </div>
                        </div>
                    </div>
<!-- end of datatable -->

            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
    <?php 
    if(isset($_POST['percent']))
    {
       
        
$sem=$_GET['sem'];
$code=$_GET['subcode'];
$grade=$_GET['grade'];
$count=0;


$query = mysqli_query($con1,"select $grade from $sem");
$rowi = mysqli_fetch_array($query);
while(!empty($rowi))
{
if($rowi['grade']=="UA")
  $count=$count+1;
}
echo "no of absent".$count;
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
