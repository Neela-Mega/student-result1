<?php
 include('../includes/dbconnection1.php');
include('../includes/session.php');

$delid = $_GET['delid'];

$query = mysqli_query($con1,"DELETE FROM subjects WHERE subjectcode='$delid'");

if ($query == TRUE) {

        echo "<script type = \"text/javascript\">
        window.location = (\"viewCourses.php\")
        </script>";  
}
else{

echo "<script type = \"text/javascript\">
        window.location = (\"viewCourses.php\")
        </script>";  

}


?>

