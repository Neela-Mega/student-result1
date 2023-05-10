
<?php

    include('../includes/dbconnection1.php');

    $fid = ($_GET['fid1']);//gradeId
   
    

        $queryss=mysqli_query($con1,"select * from students where regno='".$fid."'");                        
        $countt = mysqli_num_rows($queryss);

        if($countt > 0){                       
        echo '<label for="select" class=" form-control-label">Students Name</label>
        <select required name="studentname"  class="custom-select form-control">';
        echo'<option value="">--Select studentname--</option>';
        while ($row = mysqli_fetch_array($queryss)) {
        echo'<option value="'.$row['studentname'].'" >'.$row['studentname'].'</option>';



        
        
        }
        echo '</select>';
        }
        
    
?>

