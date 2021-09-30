<!--back end details page-->

<?php
	include_once 'configPayment.php';
?>	

 <!DOCTYPE html>
<html>
	<head>
		<title> RhythmLK - Contact US</title>
				<link rel="stylesheet" type="text/css" href="style/BackEndContact.css">
				<script src="js/contactus.js"></script>
	</head>
	
	<body>
	
		<header>
	
			<!--Main Logo-->
			<a href="home.html"><img src="images/icon3.png" alt="RhythmLK" height="100" width="100" class="logo"></a>
			
			<!--User profile-->
			<div class="user">
			
				<a href="profile.html"><img src="images/user.jpg" alt="User" height="50" width="50"></a><br>
				PROFILE<br>
				
				<div class="btn">
					<a href="login.html"><button type="button" >LOGOUT</button></a>
				</div>
				
			</div>
		
			<!--Title-->
			<center>
				<h2>RhythmLK</h2>
			</center>
	
		</header>

		<!--Menu bar-->
		<ul class="menu">
					

			<li class="menu" ><a href="home.html">Dashboard</a></li>
			<li class="menu" ><a href="productfinal.php">Product Editing</a></li>
			<li class="menu" ><a href="regDetails.php">Register Details</a></li>
		    <li class="menu"><a href="contactDetails.php">customer Feedback</a></</li>
			<li class="menu"><a href="paymentDetails.php">Payment Details</a></</li>
		
	
		</ul>
		
		
		<!--create table to display details-->
		<table class="contactData" border="1">
			<tr>
				<!--this is uniqe use as primary in the table-->
				<th>Payment ID</th>
				<th>Payment Name</th>
				<th>Payment Contact</th>
				<th>Payment Address</th>
				<th>Payment Quantity</th>
				<th>Payment </th>
				<th>Payment cash Holder</th>
				<th>Payment Card number</th>
				<th>Payment Month</th>
				<th>Payment Year</th>
				<th>Payment security Code</th>
			</tr>
		<?php
		
		 $sql = "SELECT * FROM paymentU1"; //table name is contactU
		 $result = $conn->query($sql);
		 if($result->num_rows > 0){
		 
			//output data of each row
			while($row = $result->fetch_assoc()){
				echo"<tr><td>".$row["pa_ID"]."</td>";
				echo"<td>".$row["pa_name"]."</td>";
				echo"<td>".$row["pa_contact"]."</td>";    
				echo"<td>".$row["pa_add"]."</td>";
				echo"<td>".$row["pa_qua"]."</td>";
				echo"<td>".$row["pa_pay"]."</td>";
				echo"<td>".$row["pa_hol"]."</td>";
				echo"<td>".$row["pa_crdnum"]."</td>";
				echo"<td>".$row["pa_mon"]."</td>";
				echo"<td>".$row["pa_year"]."</td>";
				echo"<td>".$row["pa_secu"]."</td></tr>";
				}
		} else {
				echo "0 result";
		}
		echo "</table>";
			$conn->close();
		?>	
		

		
		<!--footer-->
		<div class="footerCD">

			<table class="table" align="right">
				<tr>
					<td>
						<a href="https://www.facebook.com/"><img src="images/facebook.png" class="facebook" ></a>
					</td>
					<td>
						<a href="https://twitter.com"><img src="images/twitter.png" class="twitter" ></a>
					</td>
					<td>
						<a href="https://www.instagram.com/"><img src="images/instagram.png" class="instagram" ></a>
					</td>
					<td>
						<a href="https://www.google.lk/"><img src="images/g.png" class="g" ></a>
					</td>
				</tr>
			</table>
			<p class="copy">© Copyright 2019 RhythmLK. All rights reserved. </p>
		</div> 
			
	</body>
</html>
