
<?php

    include('../includes/dbconnection1.php');
    include('../includes/session.php');
    error_reporting(0);

  ?>

<!doctype html>
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head><style>
        label,input[type=text]{
            border:none;
            font-size: 150%;
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include '../includes/title.php';?>
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
<body id="div">
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
                    <?php
                             if(isset($_GET['sem']))                           
                            {
                                $semester=$_GET['sem'];
                                $sec=$_GET['sec'];
                                switch($sec){
                                    case 'A':
                                        $ret=mysqli_query($con1,"SELECT  STAFFANAME as STAFF,SUBJECTNAME,SUBJECTCODE,STUDENTAPPEAR,STUDENTPASS,STUDENTFAIL,PERCENTAGE from sectiona where SEMESTER='$semester'");  
                                        $dsec='sectiona';
                                        $sec="'A'";
                                        $s_count=mysqli_query($con1,"SELECT MAX(STUDENTAPPEAR) as max from sectiona where SEMESTER='$semester'");  
                                        break;
                                    case 'B':
                                        $ret=mysqli_query($con1,"SELECT STAFFNAME as STAFF,SUBJECTNAME,SUBJECTCODE,STUDENTAPPEAR,STUDENTPASS,STUDENTFAIL,PERCENTAGE from sectionb where SEMESTER='$semester'");  
                                        $dsec='sectionb';
                                        $sec="'B'";
                                        $s_count=mysqli_query($con1,"SELECT MAX(STUDENTAPPEAR) as max from sectionb where SEMESTER='$semester'");  
                                        break;
                                    case 'ALL':
                                        $ret=mysqli_query($con1,"SELECT  STAFFANAME as STAFF,SUBJECTNAME,SUBJECTCODE,STUDENTAPPEAR,STUDENTPASS,STUDENTFAIL,PERCENTAGE from section where SEMESTER='$semester'");  
                                        $dsec='section';
                                        $sec="'A','B'";
                                        $s_count=mysqli_query($con1,"SELECT MAX(STUDENTAPPEAR) as max from section where SEMESTER='$semester'");  
                                        break;
                                }
                            }
                    ?>
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    
                <div class="col-lg-12">
                    <div class="card">
                            <div class="card-header">
							<strong class="card-title"><h3 align="center">MOOKABIGAI COLLEGE OF ENGINEERING </h3></strong>
                            <strong class="card-title"><h4 align="center">Srinivasa Nagar,Keeranur-622502 </h4></strong>
                                
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
							
                            <strong class="card-title"><h3 align="center"> UNIVERSITY EXAMINATION RESULT ANALYSIS</h3></strong>
                            </div><br>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                       
                                        <form method="Post" action="">
                                        <div class="row">
                                        
                                         <div class="form-group">

  <label for="">Department:</label>  <input type="text" id="" name="dept" value="CSE">
  <label for="">Date:</label>  <input type="text" id="" name="date" value="<?php echo date("m/d/y"); ?>"><br><br>
  <label for="">Course:</label>  <input type="text" id="course" name="course" value="BE">
  <label for="">Batch:</label>  <input type="text" id="year" name="batch" value="<?php $q1=mysqli_query($con1,"SELECT DATABASE()"); $q1=mysqli_fetch_row($q1); echo $q1[0];?>"><br><br>
  <label for="">Semester:</label>  <input type="text" id="year" name="sem" value="<?php echo $semester;?>">
  <label for="">Academic Year:</label>  <input type="text" id="year" name="year" value="<?php $yr=explode("-",$q1[0]); echo (int)((int)$yr[0]+($semester/2)); ?>"><br><br>
  <label for="">Total Students:</label>  <input type="text" id="total" name="total" value="<?php $retrive=mysqli_fetch_array(mysqli_query($con1,"SELECT  MAX(TOTALSTUDENT) AS count from $dsec where SEMESTER='$semester'")); echo $retrive['count']; ?>">
  <label for="">Section:</label>  <input type="text" id="year" name="sec" value="<?php echo $sec;?>"><br><br>
  

                                                                                          
                                                        
                                                    </div>
                                                </div>
                                         
                                                
                                                 
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
                                <strong class="card-title"><h2 align="center">Report</h2></strong>
                            </div>
                            <div class="card-body">
                               <table class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            
                                            <th>SUBJECT NAME</th>
                                            <th>SUBJECT CODE </th>
                                            <th>STAFF HANDLE BY </th>
                                            <th>NO.OF STUDENTS APPEARED </th>
                                            <th>NO.OF STUDENTS PASSED </th>
                                            <th>NO.OF STUDENTS FAILED </th>
                                            <th>PASS PERCENTAGE </th>
                                            
                                            </tr>
                                            <?php
                                            while($row=mysqli_fetch_array($ret))
                                             {
                                                
                                                    ?>

                                <tr>
                                <td><?php  echo $row['SUBJECTNAME'];?></td>
                                <td><?php  echo $row['SUBJECTCODE'];?></td>
                                <td><?php  echo $row['STAFF'];?></td>
                                <td><?php  echo $row['STUDENTAPPEAR'];?></td>
                                <td><?php  echo $row['STUDENTPASS'];?></td>
                                <td><?php  echo $row['STUDENTFAIL'];?></td>
                                <td><?php  echo $row['PERCENTAGE'];?></td>
                                             </tr>
                                             <?php
            
                                          } ?>
                                    </thead>
                                    <tbody>                                       
                                    </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                            <br>                                              
                              <br> 
                              <?php 
                                $print_sem="SEM".$semester;
                                $pass_Sem=mysqli_query($con1,"SELECT COUNT('$print_sem') from print as t1 JOIN students as t2 ON t1.REGNO=t2.regno WHERE t1.$print_sem=0 AND t2.section IN($sec)");
                                $one_Sem=mysqli_query($con1,"SELECT COUNT('$print_sem') from print as t1 JOIN students as t2 ON t1.REGNO=t2.regno WHERE t1.$print_sem=1 AND t2.section IN($sec)");
                                $two_Sem=mysqli_query($con1,"SELECT COUNT('$print_sem') from print as t1 JOIN students as t2 ON t1.REGNO=t2.regno WHERE t1.$print_sem=2 AND t2.section IN($sec)");
                                $three_Sem=mysqli_query($con1,"SELECT COUNT('$print_sem') from print as t1 JOIN students as t2 ON t1.REGNO=t2.regno WHERE t1.$print_sem=3 AND t2.section IN($sec)");
                                $more_Sem=mysqli_query($con1,"SELECT COUNT('$print_sem') from print as t1 JOIN students as t2 ON t1.REGNO=t2.regno WHERE t1.$print_sem>3 AND t2.section IN($sec)");
                                $pass_cum=mysqli_query($con1,"SELECT COUNT(TOTAL) from print as t1 JOIN students as t2 ON t1.REGNO=t2.regno WHERE t1.TOTAL=0 AND t2.section IN($sec)");
                                $one_cum=mysqli_query($con1,"SELECT COUNT(TOTAL) from print as t1 JOIN students as t2 ON t1.REGNO=t2.regno WHERE t1.TOTAL=1 AND t2.section IN($sec)");
                                $two_cum=mysqli_query($con1,"SELECT COUNT(TOTAL) from print as t1 JOIN students as t2 ON t1.REGNO=t2.regno WHERE t1.TOTAL=2 AND t2.section IN($sec)");
                                $three_cum=mysqli_query($con1,"SELECT COUNT(TOTAL) from print as t1 JOIN students as t2 ON t1.REGNO=t2.regno WHERE t1.TOTAL=3 AND t2.section IN($sec)");
                                $more_cum=mysqli_query($con1,"SELECT COUNT(TOTAL) from print as t1 JOIN students as t2 ON t1.REGNO=t2.regno WHERE t1.TOTAL>3 AND t2.section IN($sec)");
                                $yr_cum=((int)date("Y")-$yr[0])*2;
                              ?>
                             <div class="col-md-12">
                            <div class="card">
                            <div class="card-header">
                             <strong class="card-title"><h2 align="center">Analysis -This Semester</h2></strong>
                            </div>
                            <div class="card-body">
                               <table id="" class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            
                                            
                                            <th>NO.OF STUDENTS APPEARED </th>
                                            <th>All Pass</th>
                                            <th>One Arrear </th>
                                            <th>Two Arrears </th>
                                            <th>Three Arrears </th>
                                            <th>More than three Arrears </th>
                                            <th>PASS PERCENTAGE </th>   
                                        </tr>
                                        <tr>
                                            <th><?php $s_count=mysqli_fetch_row($s_count); echo $s_count[0]; ?></th>
                                            <th><?php $pass_Sem=mysqli_fetch_row($pass_Sem); echo $pass_Sem[0]; ?></th>
                                            <th><?php $one_Sem=mysqli_fetch_row($one_Sem); echo $one_Sem[0]; ?></th>
                                            <th><?php $two_Sem=mysqli_fetch_row($two_Sem); echo $two_Sem[0]; ?></th>
                                            <th><?php $three_Sem=mysqli_fetch_row($three_Sem); echo $three_Sem[0]; ?></th>
                                            <th><?php $more_Sem=mysqli_fetch_row($more_Sem); echo $more_Sem[0]; ?></th>
                                            <th><?php echo ($pass_Sem[0]/$s_count[0])*100;?></th>
                                        </tr>
                                    </thead>
                                    <tbody>                                  
                                                                                       
                                    </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><h2 align="center">Analysis -Cumulative</h2></strong>
                            </div>
                            <div class="card-body">
                               <table id="" class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            
                                            
                                            <th>NO.OF STUDENTS APPEARED </th>
                                            <th>All Pass</th>
                                            <th>One Arrear </th>
                                            <th>Two Arrears </th>
                                            <th>Three Arrears </th>
                                            <th>More than three Arrears </th>
                                            <th>PASS PERCENTAGE </th>
                                            </tr>
                                            <tr>
                                            <th><?php if(((int)date("m"))>=8) $c_sem= $yr_cum; else $c_sem= $yr_cum-1; 
                                            $cum_count=mysqli_query($con1,"SELECT MAX(STUDENTAPPEAR) as max from $dsec where SEMESTER='$c_sem'");
                                            $cum_count=mysqli_fetch_row($cum_count);
                                            echo $cum_count[0];?></th>
                                            <th><?php $pass_cum=mysqli_fetch_row($pass_cum); echo $pass_cum[0]; ?></th>
                                            <th><?php $one_cum=mysqli_fetch_row($one_cum); echo $one_cum[0]; ?></th>
                                            <th><?php $two_cum=mysqli_fetch_row($two_cum); echo $two_cum[0]; ?></th>
                                            <th><?php $three_cum=mysqli_fetch_row($three_cum); echo $three_cum[0]; ?></th>
                                            <th><?php $more_cum=mysqli_fetch_row($more_cum); echo $more_cum[0]; ?></th>
                                            <th><?php echo ($pass_cum[0]/$cum_count[0])*100; ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                            </table>
                            </div>                      
                        <CENTER>
                            <button type="submit" name="submit1" class="btn btn-success" style="width:13%" onclick="my()">Print</button>
                        </CENTER>                                    
                               
<!-- end of datatable -->
        </div><!-- .animated -->
    </div><!-- .content -->
    
            </div>
                <div class="clearfix"></div>

        <?php include 'includes/footer.php';?>


</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->

<script>
                    function my(){
                        document.getElementById("left-panel").style.display="none";
                        document.getElementById("header").style.display="none";
                        var obj='<html><head>\n';
                        obj+='<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">\n';
                        obj+='</head>\n<body>\n';
                        obj+=document.getElementById("div").innerHTML;
                        obj+='</body>\n';
                        w=window.open();
                        w.document.write(obj);
                        w.print();
                        w.close();
                        document.getElementById("header").style.display="block";
                        document.getElementById("left-panel").style.display="block";
                    }
                    </script>
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
