<!--back end details page-->

<?php
	include_once 'configContact.php';
?>	

 <!DOCTYPE html>
<html>
	<head>
		<title> RhythmLK - Contact US</title>
				<link rel="stylesheet" type="text/css" href="style/BackEndContact.css ">
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
				<th>Contact ID</th> <!--this is uniqe use as primary in the table-->
				<th>Contact Name</th>
				<th>Contact Email</th>
				<th>Contact Phone</th>
				<th>Contact Massage</th>
			</tr>
		<?php
		
		 $sql = "SELECT * FROM contactU"; //table name is contactU
		 $result = $conn->query($sql);
		 if($result->num_rows > 0){
		 
			//output data of each row
			while($row = $result->fetch_assoc()){
				echo"<tr><td>".$row["contact_ID"]."</td>";
				echo"<td>".$row["contact_Name"]."</td>";     //db name = contact table name = contactU tables=contact_ID,contact_Name,contact_Email,contact_Phone,contact_Massage
				echo"<td>".$row["contact_Email"]."</td>";
				echo"<td>".$row["contact_Phone"]."</td>";
				echo"<td>".$row["contact_Massage"]."</td></tr>";
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
