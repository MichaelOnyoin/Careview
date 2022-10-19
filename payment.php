<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Payment</title>
	<link rel="stylesheet" type="text/css" href="../repms/repms/repms2.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	
</head>
<body>
    
	<div id="nn">
			
				<div class="navbar">
					<div>
						<img style="height: 60px; width: 75px; border-radius:80%;" src="careviewlogo.png">
					</div>
										
					<div>
						<a class="active" href="">Payment Method</a>
					</div>

				  	<div>
				  		<a href="">Order</a>
				  	</div>

				  	<div>
				  		<a href="#contact_btn">Contact</a>
				  	</div>
			  	
				  	<div>
				  		<a class="" href="logout.php">Logout</a>
				  	</div>

				</div>
		
	</div>

	<h1>PAYMENT METHOD.</h1>
	<h2 style="text-align: center;"> Select payment method <p>dear client <?php 
      include_once('user_session.php');
	  //echo "<br>";
	  //$_SESSION['total'] = $total;
	  //print_r($_SESSION['cart']);
	  
	  echo "<br> hey ";
	  if(!empty($_SESSION['cart'])){
		$total=0;
		$output="";
		foreach($_SESSION['cart'] as $key => $value){
			$output .="
			<tr>
			<td>".$value['id']."</td>
			<td>".$value['name']."</td>
			<td>".$value['price']."</td>
			<td>".$value['quantity']."</td>
			<td>Ksh".number_format($value['price'] * $value['quantity'])."</td>
			<td><a href='cart.php?action=remove&id=".$value['id']."'>
			 <button class='btn btn-danger btn-block'>Remove</button>
			</a></td>
			</tr>
			.";
			$total=$total+$value['quantity']*$value['price'];
			

					}
	}
	  
	  ?></p></h2>
	<div class="container">
		<div class="button-align">
			<style>
				.tablinks img
				{
					margin: auto;
				}
			</style>
		  <button title="Visa" class="tablinks button" onclick="openCity(event, 'pay_visa')"><img src="images/visa.png"width="80%" height="100" ></button>
		  <button title="Paypal" class="tablinks button" onclick="openCity(event, 'pay_paypal')"><img src="images/paypal.png"width="100" height="100"></button>
		  <button title="M-Pesa" class="tablinks button" onclick="openCity(event, 'pay_mpesa')"><img src="../repms/repms/payment/images/mpesa.png"width="100" height="100"></button>
		  <button title="Cash | Cheque" class="tablinks button" onclick="openCity(event, 'pay_cash')"><img src="../repms/repms/payment/images/cheque.png"width="100" height="100"></button>
		</div>

		<div id="pay_visa" class="tabcontent paymethod">
			<h2 style="color: #dd9e07;">Visa</h2>
		 <h3>Fill The Form Below</h3>
					<form action="processPayment.php" method="post">
						
					<input type="hidden" name="payment_id" value="4">
					
					<input type="hidden" name="payment_name" value="Bank Visa">
					<input type="hidden" name="amount" value="<?= $total ;?>">
					<input type="hidden" name="status" value="Paid">
					
					<input type="hidden" name="client_id" value="<?= $login_id ;?>">
						
						<label>Name on Card:</label>
						<br>
						<input type="text" id="name_card" name="name_card" required>

						<br><br>

						<label>Card Number:</label>
						<br>
						<input type="text" id="card_no" name="card_no" required>

						<br><br>

						<label for="expmonth">Expiry Month:</label><br>
						<input type="int" id="expmonth" name="expmonth" required> 

						<br><br>

						<label for="expyear">Expiry Year:</label>
						<br>
						<input type="int" id="expyear" name="expyear" required>

						<br><br>

						<label for="cvv">CVV</label>
						<br>
						<input type="text" id="cvv" name="cvv" required>

						<br><br>

			            <label>City</label>
			            <br>
						<input type="text" id="city" name="city" required>

						<br><br>

						<label>Country</label>
						<br>
						<input type="text" id="country" name="country" required>

						<br><br>

						<button type="submit" class="paybtn" id="paybtn">Pay</button>
				 
					
					</form>
		</div>

		<div id="pay_paypal" class="tabcontent paymethod">
		  <h2 style="color: #078ddd;">Paypal</h2>
		  	<h3>Fill The Form Below</h3>
			<form action="processPayment.php" method="post">
				<input type="hidden" name="payment_id" value="3">
				<input type="hidden" name="payment_name" value="Paypal">
				
				
				<input type="hidden" name="amount" value="<?= $total ;?>">
				<input type="hidden" name="status" value="Paid">
				
				<input type="hidden" name="client_id" value="<?=$login_id ;?>">
									
				<label>Email:</label>
				<input type="text" id="email" name="email"><br><br>

				<label>Password:</label>
				<br>
				<input type="password" id="ppass" name="ppass"><br><br>
				
				<!-- <button type="submit" class="paybtn"  id="paybtn" ><a href="">Pay</a></button> -->
				<div id="paypal-payment" class="btn" type="submit"></div>
	            <script src="https://www.paypal.com/sdk/js?client-id=ASAffNwfS_Fdd0ajM9iwfF0SY4nTiCLY9EX95V_Iz_K-BXnN4jvPtzokitEjpPQe7YxVDozPZp6X9hjB&disable-funding=credit,card">
					 
				</script>
				<script src="index.js">
					localStorage.setItem('total','<?= $total;?>');
				</script>
				
			</form>

		</div>

		<div id="pay_mpesa" class="tabcontent paymethod">
		  <h2 style="color: #68b916;">Mpesa</h2>

				    <form action="processPayment.php" method="post">
						<input type="hidden" name="payment_id" value="2">
						<input type="hidden" name="payment_name" value="Mpesa">
						<input type="hidden" name="amount" value="<?= $total ;?>">
						<input type="hidden" name="status" value="Paid">
						
						<input type="hidden" name="client_id" value="<?= $login_id ;?>">
				        <ol>
				            <li>Go to M-PESA on your phone menu.</li>
				            <li>Select PayBill.</li>
				            <li>Enter the Business Number: <strong>242424</strong></li>
				            <li>Enter your name <strong>IN ALL CAPS</strong> as the <strong>Account Number</strong></li>
				            <li>Enter the <strong>amount</strong></li>
				            <li>Enter your <strong>pin</strong> and Pay</li>
				        </ol> 

				        <br><br>

				        <label for="mpesa_code">Fill the Mpesa <strong>Payment Code</strong> Here</label>
				        <input type="text" name="mpesa_code" id="mpesa_code">
				        <br>
				        <button type="submit" class="paybtn"  id="paybtn" ><a href="mpesa.php">Pay</a></button>
				        
				        
				    </form>
		</div>

		<div id="pay_cash" class="tabcontent paymethod">
		  <h2 style="color: #07c9dd">Cash / Cheque</h2>

				    <form action="processPayment.php" method="post">
						<input type="hidden" name="payment_id" value="1">
						<input type="hidden" name="payment_name" value="Cash">
						
						
						<input type="hidden" name="amount" value="<?= $total ;?>">
						<input type="hidden" name="status" value="Paid">
						
						<input type="hidden" name="client_id" value="<?= $login_id ;?>">
				        
				        <p>Please pick the method of payment</p>

				        <input type="checkbox" id="cash" name="cash" onclick="enableEdit('cash_order',this.checked)"><label for="cash" >Cash</label>

				        <br>

				        <input type="checkbox" id="cheque" name="cheque" onclick="enableEdit('cheque_order',this.checked)">
				        <label for="cheque" style="width: 20%;">Cheque</label>
				        
				        <br><br>

				        <label for="cash_order">Fill the <strong>Cash Receipt Number</strong> Here</label>
				        <input type="int" name="cash_order" id="cash_order" disabled>

				        <br>

				        <label for="cheque_order">Fill the <strong>Cheque Number</strong> Here</label>
				        <input type="int" name="cheque_order" id="cheque_order" disabled>

				        <br><br>

				        <button type="submit" class="paybtn"  id="paybtn" >Pay</button>
				     
				     
				        
				    </form>

		</div>
	</div>
	<div>
		<p><a href="print"><h4>View Receipt here</h4></a></p>
	</div>
	<script>
		function openCity(evt, method) {
		  var i, tabcontent, tablinks;
		  tabcontent = document.getElementsByClassName("tabcontent");
		  for (i = 0; i < tabcontent.length; i++) {
		    tabcontent[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablinks");
		  for (i = 0; i < tablinks.length; i++) {
		    tablinks[i].className = tablinks[i].className.replace(" active", "");
		  }
		  document.getElementById(method).style.display = "block";
		  evt.currentTarget.className += " active";
		}
		</script>
			
	</div>
    
    <br><br>

    <div class="footer">
		<div id="footer_top">
		<div class="contact_us">
			<button id="contact_btn" onclick="openContactForm()">Contact Us</button>
			<br><br>
			<div id="contact_form" style="display: none">
			<form>
				<input type="email" name="contact_email" id="contact_email" placeholder="Email">
				<br><br>
				<textarea id="message" name="message" placeholder="Message"></textarea> 
				<br><br>
				<input type="submit" name="submit" value="Send">
			</form>
			</div>
		</div>

		

		<div class="links">
		<li class="nav-item"><a href="logout.php" class="">Log out</a></li>
			<li><a href="">About Us</a></li>
			<li><a href="">Team Members</a></li>
			<li><a href="">Latest Market Drugs</a></li>
			<li><a href="">Drug Manufacturers</a></li>
		</div>
		<div class="links">
			<li><a href="">Register</a></li>
			<li><a href="">Market Reports</a></li>
			<li><a href="">Lifestyles</a></li>
			<li><a href="">Commercial</a></li>
		</div>

		<div id="third_footer">
			<div id="footer_contact_icons">
				<div>
					<img src="/repms/images/footer/office.png">
					<p>Siwaka, Nairobi P.O Box 5453, Kenya</p>
				</div>
				<div>
					<img src="/repms/images/footer/phone.png">
					<p>+254 764 765 44</p>
				</div>
				<div>
					<img src="/repms/images/footer/gmail.png">
					<p>info@clothstock.org</p>
				</div>
				<div>
					<img src="/repms/images/footer/fax.png">
					<p>+254 764 765 44</p>
				</div>
			</div>
		</div>

		</div>
		<div id="footer_bottom">
		<div id="footer_socials">
			<img src="/repms/images/footer/facebook.png">
			<img src="/repms/images/footer/instagram.png">
			<img src="/repms/images/footer/twitter.png">
			<img src="/repms/images/footer/google-plus.png">
		</div>
		</div>

	<script>
		function open(method) {
		  
		  document.getElementById(method).style.display = "block";
		}
		</script>	
</body>
</html>