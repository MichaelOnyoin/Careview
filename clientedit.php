<?php
include('conn.php');

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobileno=$_POST['phone_number'];
$address=$_POST['address'];
$client_id=$_POST['client_id'];



$sql_edit="UPDATE clients SET first_name='$first_name',last_name='$last_name',email='$email',password='$password',phone_number='$mobileno',address='$address' where client_id='$client_id'";

if($con->query($sql_edit)==TRUE){
    echo "<br>";
    echo "Edited successfully";
    header('Location: userpage.php');
    
}else{
    echo "Error in update".$con->error;
}


 
$con->close(); 
?>