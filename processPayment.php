<?php
//session_start();
require("conn.php");


$client_id=$_POST['client_id'];
$payment_id=$_POST['payment_id'];
$payment_name=$_POST['payment_name'];
$status=$_POST['status'];
$amount=$_POST['amount'];
// $date=$_POST['date'];


$sql_insert="INSERT INTO `ordertb`(`order_id`, `client_id`, `payment_id`, `payment_name`,`amount`, `status`, `date`)
 VALUES ('','$client_id','$payment_id','$payment_name','$amount','$status', CURRENT_TIMESTAMP())";
if($con->query($sql_insert)==TRUE){
  echo "<br>";
  echo "Inserted successfully";
}else{
  echo "Error".$con->error;
}			
header("location: userpage.php"); 
 mysqli_close($con);
 


?>