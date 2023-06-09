
<?php

    include('../includes/dbconnection1.php');
    include('../includes/dbconnection.php');

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


                                                    $query=mysqli_query($con,"select * from tblfaculty ORDER BY facultyName ASC");                        
                                                    $count = mysqli_num_rows($query);
                                                    if($count > 0){ 
                                                        echo '<label for="select" class=" form-control-label">Staff Handled By</label>';                      
                                                        echo ' <select required name="facultyName" class="custom-select form-control">';
                                                        echo'<option value="">--Select facultyname--</option>';
                                                        while ($row = mysqli_fetch_array($query)) {
                                                        echo'<option value="'.$row['facultyName'].'" >'.$row['facultyName'].'</option>';
                                                            }
                                                                echo '</select>';
                                                            }
    
    
?>


