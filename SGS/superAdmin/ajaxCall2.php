
<?php

    include('../includes/dbconnection1.php');

    $fid = ($_GET['fid']);//gradeId
   
    

        $queryss=mysqli_query($con1,"select * from subjects where subjectcode='".$fid."'");                        
        $countt = mysqli_num_rows($queryss);

        if($countt > 0){                       
        echo '<label for="select" class=" form-control-label">Subject Name</label>
        <select required name="subjectname"  class="custom-select form-control">';
        echo'<option value="">--Select subjectname--</option>';
        while ($row = mysqli_fetch_array($queryss)) {
        echo'<option value="'.$row['subjectname'].'" >'.$row['subjectname'].'</option>';



        
        
        }
        echo '</select>';
        }
        $queryss=mysqli_query($con1,"select * from subjects where subjectcode='".$fid."'");                        
        $countt = mysqli_num_rows($queryss);

        if($countt > 0){                       
            echo '<label for="select" class=" form-control-label">Semester</label>';
            echo'<select required name="semester"  class="custom-select form-control">';
            echo'<option value="">--Select semester--</option>';
            while ($row = mysqli_fetch_array($queryss)) {
            echo'<option value="'.$row['semester'].'" >'.$row['semester'].'</option>';    
                        
            }
            echo '</select>';
            }
    
?>

