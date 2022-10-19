<?php
require_once("conn.php");
print_r($_POST);
echo "<br>";

$firstname =$_POST["first_name"];
$lastname =$_POST["last_name"];
$email =$_POST["email"];
$password=$_POST["password"];
$mobileno=$_POST["phone_number"];
$gender =$_POST["gender"];
$age=$_POST["age"];
$address=$_POST["address"];




$sql_insert="INSERT INTO `clients`(`client_id`,  `first_name`, `last_name`,`email`, `password`,`gender`,`age`,`address`, `phone_number`) 
VALUES ('','$firstname','$lastname','$email','$password','$gender','$age','$address','$mobileno')";
if($con->query($sql_insert)==TRUE){
    echo "<br>";
    echo "Inserted successfully";
}else{
    echo "Error".$con->error;
}
?>