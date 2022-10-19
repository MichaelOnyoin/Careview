<?php
require("../conn.php");
$firstname =$_POST["first_name"];
$lastname =$_POST["last_name"];
$password=$_POST["password"];
$role=$_POST["role"];
$email=$_POST["email"];
$phoneno=$_POST["phone_number"];


$sql_insert="INSERT INTO `admin`(`admin_id`,first_name,last_name,email, `password`,`role`,phone_number)
VALUES('','$firstname','$lastname','$email','$password','$role','$phoneno')";
if($con->query($sql_insert)==TRUE){
    echo "<br>";
    echo "Inserted successfully";
    header('Location: sidenav.php');
    
}else{
    echo "Error".$con->error;
}
  

?>