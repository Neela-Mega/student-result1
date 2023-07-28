
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
                            
                               

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><h2 align="center">View/Print Arrears</h2></strong>
                            </div>
                            <div class="card-body">
                               <table id="bootstrap-data-table" class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            
                                            <th>Reg.no</th>
                                            <th>Student Name</th>
                                            <th> SA1</th>
                                            <th> SA2</th>
                                            <th> SA3</th>
                                            <th> SA4</th>
                                            <th> SA5</th>
                                            <th> SA6</th>
                                            <th> SA7</th>
                                            <th> SA8</th>
                                            <th> ARREARS(ALL)</th>
                                            <th> GPA1</th>
                                            <th> GPA2</th>
                                            <th> GPA3</th>
                                            <th> GPA4</th>
                                            <th> GPA5</th>
                                            <th> GPA6</th>
                                            <th> GPA7</th>
                                            <th> GPA8</th>
                                            <th> CGPA</th>
                                        </tr>
                                    </thead>
                                    <tbody>      
                            <?php
                           $ret=mysqli_query($con1,"SELECT * from print");
                           while ($row=mysqli_fetch_array($ret)) {
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
                                 <td><?php  echo $row[13];?></td>
                                 <td><?php  echo $row[14];?></td>
                                 <td><?php  echo $row[15];?></td>
                                 <td><?php  echo $row[16];?></td>
                                 <td><?php  echo $row[17];?></td>
                                 <td><?php  echo $row[18];?></td>
                                 <td><?php  echo $row[19];?></td>
                    <?php 
                    } 
                                          ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
<!-- end of datatable -->
                        <CENTER>
                            <button type="submit" name="submit1" class="btn btn-success" style="width:9%" onclick="my()">Print</button>
                        </CENTER> 
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

    <div class="clearfix"></div>

        <?php include 'includes/footer.php';?>


</div><!-- /#right-panel -->

<!-- Right Panel -->
<script>
                    function my(){
                        document.getElementById("left-panel").style.display="none";
                        document.getElementById("header").style.display="none";
                        var obj='<html><head>\n';
                        obj+='<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">\n';
                        obj+='<style>table,td,th{ border: 1px solid; text-align:center;} table{ border-collapse:collapse;}label,input[type=text]{border:none;font-size: 100%;}</style>';
                        obj+='</head>\n<body>\n';
                        obj+='<div class="breadcrumbs"><div class="breadcrumbs-inner"><div class="row m-0"><div class="col-lg-12"><div class="card">';
                        obj+='<div class="card-header"><strong class="card-title"><h3 align="center">MOOKABIGAI COLLEGE OF ENGINEERING </h3></strong><strong class="card-title"><h4 align="center">Srinivasa Nagar,Keeranur-622502 </h4></strong>';
                        obj+='</div></div></div></div></div></div>';
                        obj+="<label>Batch:</label>  <input type='text' id='year' name='batch' value='<?php $q1=mysqli_query($con1,"SELECT DATABASE()"); $q1=mysqli_fetch_row($q1); echo $q1[0];?>'><div  style='float:right;'><label>Date:</label><input type='text' name='date' value='<?php echo date("m/d/y"); ?>'></div><br><br>";
                        obj+='<table><thead><tr>';
                        obj+="<th>Reg.no</th><th>Student Name</th><th> SA1</th><th> SA2</th><th> SA3</th><th> SA4</th><th> SA5</th><th> SA6</th><th> SA7</th>";
                        obj+="<th> SA8</th><th> ARREARS(ALL)</th><th> GPA1</th><th> GPA2</th><th> GPA3</th><th> GPA4</th><th> GPA5</th><th> GPA6</th><th> GPA7</th>";
                        obj+="<th> GPA8</th><th> CGPA</th></tr></thead><tbody>\n";
                        obj+="<?php $ret=mysqli_query($con1,"SELECT * from print"); while ($row=mysqli_fetch_array($ret)) { ?>";
                        obj+="<tr><td><?php  echo $row['REGNO'];?></td><td><?php  echo $row['NAME'];?></td>";
                        obj+="<td><?php  echo $row[2];?></td><td><?php  echo $row[3];?></td><td><?php  echo $row[4];?></td><td><?php  echo $row[5];?></td>";
                        obj+="<td><?php  echo $row[6];?></td><td><?php  echo $row[7];?></td><td><?php  echo $row[8]?></td><td><?php  echo $row[9];?></td><td><?php  echo $row[10];?></td>";
                        obj+="<td><?php  echo $row[11];?></td><td><?php  echo $row[12];?></td><td><?php  echo $row[13];?></td><td><?php  echo $row[14];?></td><td><?php  echo $row[15];?></td><td><?php  echo $row[16];?></td>";
                        obj+="<td><?php  echo $row[17];?></td><td><?php  echo $row[18];?></td><td><?php  echo $row[19];?></td>";
                        obj+="<?php  }  ?>";     
                        obj+="</tbody></table>";
                        obj+='</body>\n';
                        w=window.open();
                        w.document.write(obj);
                        w.print();
                        w.close();
                        document.getElementById("header").style.display="block";
                        document.getElementById("left-panel").style.display="block";
                    }
                    </script>
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
