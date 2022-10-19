<?php
require("conn.php");
$client_id=$_POST['client_id'];
$prescription_name=$_POST['prescription_name'];
$description=$_POST['description'];
$prescribed_by=$_POST['prescribed_by'];
$duration=$_POST['duration'];
$progression=$_POST['progression'];


$sql_insert="INSERT INTO `prescriptions`(`prescription_id`, `client_id`, `prescription_name`, `description`, `prescribed_by`, `duration`, `progression`) 
VALUES ('','$client_id','$prescription_name','$description','$prescribed_by','$duration','$progression')";
if($con->query($sql_insert)==TRUE){
    echo "<br>";
    echo "Inserted successfully";
    header("Location: userpage.php");
   
    
}else{
    echo "Error".$con->error;
}
  

?>