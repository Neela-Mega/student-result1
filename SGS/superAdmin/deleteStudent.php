<?php
 include('../includes/dbconnection1.php');
include('../includes/session.php');

$delid = $_GET['delid'];

$query = mysqli_query($con1,"DELETE FROM students WHERE regno='$delid'");

if ($query == TRUE) {

        echo "<script type = \"text/javascript\">
        window.location = (\"viewStudent.php\")
        </script>";  
}
else{

echo "<script type = \"text/javascript\">
        window.location = (\"createStudent.php\")
        </script>";  

}


?>

