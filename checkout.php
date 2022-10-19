<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<style>
.container{
	border-radius: 5px;
	background-color: #f2f2f2;
	padding: 20px;
	width: 50%;
	margin: auto;
	height: auto;
}
</style>

<head><title>CHECKOUT PAGE</title></head>
<body>
<div class="container">

 <h1>Checkout</h1>
 <form class="form-group">
  Name:<br>
  <input type="text" name="name" id="name" class="form-control"><br>
  Phone Number:<br>
  <input type="number" name="phoneno" id="phoneno" class="form-control"><br>
  Amount:<br><?php echo $_SESSION['amount']; ?><br>

  Delivery destination:<br>
  <input type="text" name="destination" id="destination" class="form-control"><br>
  <div id="paypal-payment">

  </div>


    <script src="https://www.paypal.com/sdk/js?client-id=ASAffNwfS_Fdd0ajM9iwfF0SY4nTiCLY9EX95V_Iz_K-BXnN4jvPtzokitEjpPQe7YxVDozPZp6X9hjB&disable-funding=credit,card"></script>
    <script src="index.js"></script>
  </form>
  <a href="../NIScart/success.php"></a>
</div>

  <?php
  $name=$_GET['name'];
  $number=$_GET['phoneno'];
  $amount=$_GET['amount'];
  $destination=$_REQUEST['destination'];
  
  $_SESSION['Sname']=$name;
  $_SESSION['Snumber']=$number;
  $_SESSION['Samount']=$amount;
  $_SESSION['Sdestination']=$destination;
  ?>
</body>
</html>

