 <?php
	include_once 'configFAQs.php';
?>
 
 
 <!DOCTYPE html> <!--this form fill by user main contact us page-->
<html>
	<head>
		<title> RhythmLK - Contact US</title>
				<link rel="stylesheet" type="text/css" href="style/FAQs.css ">
				<script src="js/faq.js"></script>
	</head>
	
	<body>
	
		<header>
	
			<!--Main Logo-->
			<a href="home.php"><img src="images/icon3.png" alt="RhythmLK" height="100" width="100" class="logo"></a>
			
			<!--User profile-->
			<div class="user">
			
				<a href="profile.php"><img src="images/user.jpg" alt="User" height="50" width="50"></a><br>
				PROFILE<br>
				
				<div class="btn">
					<a href="login.php"><button type="button" >LOGOUT</button></a>
				</div>
				
			</div>
		
			<!--Title-->
			<center>
				<h2>RhythmLK</h2>
			</center>
	
		</header>

		<!--Menu bar-->
		<ul class="menu">
			<li class="menu" ><a href="home.php">Home</a></li>
			
				<!--Drop down-->
				<div class="dropdown">
					<button class="dropbtn">Products</button>
					
					<div class="dropdown-content">
						<a href="guitar.php">Guitar & Violin</a>
							<a href="keyboards.html">Keyboard</a>
							<a href="percussion.html">Percussion</a>
							<a href="flute.html">Flute</a>
					</div>
					
				</div> 
				
			<li class="menu"><a href="aboutus.html">About Us</a></</li>
			<li class="menu"><a href="contact.html">Contact Us</a></</li>
			<li class="menu"><a href="FAQs.php">FAQs</a></</li>
		
		</ul>
		
		<center>
		<h1>Frequently Ask Questions</h1>
		</center>
	
	<div>
		
				<form method ="POST" action ="submitFAQ.php">
				
					
						<input   type="text" class="feild" placeholder="Enter Your Question" required name="FAQ_question"/>  <!--html button name Cname  this name add in to the back end details page-->
						<input type="submit" class="sendbtn" value="DONE" onclick="faqForm()">
						<br>
						
				</form>	
		
		<hr class="line"> <br>
		
		<!--create table to display details-->
		<ul class="mn">
	
		<?php
		
		 $sql = "SELECT * FROM FAQs"; //table name is FAQs
		 $result = $conn->query($sql);
		 if($result->num_rows > 0){
		 
			//output data of each row
			while($row = $result->fetch_assoc()){
				
				echo"<li><h11>".$row["FAQ_Question"]."<h11></li>"; //db name = FAQ table name = FAQs tables=contact_ID,contact_Name,contact_Email,contact_Phone,contact_Massage
			
				echo"<li><h10>".$row["FAQ_Answer"]."<h10></li><br><br><hr>";
				}
		} else {
				echo "0 result";
		}
		echo "</ul>";
			$conn->close();
		?>	
		
			<hr class="line"> <br><br>
		
		<form method ="POST" action ="submitFAQ.php" >
				
				
					<input   type="text" class="feild" placeholder="Enter Your Answer" required name="FAQ_answer"/>  <!--html button name Cname  this name add in to the back end details page-->	
					<input type="submit" class="sendbtn" value="DONE">
					<br>
						
		</form>
	</div>

		<!--footer-->
		<div class="footerFAQs">

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


<!--
	q1) Do you charge sales tax on your products?
	a1) We are required to collect sales tax on all orders shipped to Alabama, Arkansas, California, Colorado, Connecticut, D.C., Georgia, Hawaii, Illinois, Indiana, Iowa, Kentucky, Maine, Maryland, Massachusetts, Michigan, Minnesota, Mississippi, Missouri, Nebraska, Nevada, New Jersey, New Mexico, New York, North Carolina, North Dakota, Ohio, Oklahoma, Pennsylvania, Rhode Island, South Carolina, South Dakota, Utah, Vermont, Virginia, Washington, West Virginia, Wisconsin, and Wyoming. You will be charged the state and local sales tax rate for any orders shipped to these states.
	
	q2) Will I get cash back if I return a product for which I used a Promotional E-Certificate or Musicians Friend Rewards points to pay for?
	a2) Assuming your product is eligible for return, if you return a product where all or a portion of the Eligible Purchase was paid for with a Promotional EGift Certificates or Points, your account will be credited the Promotional E-Certificate amount or Point amount used to pay for the Eligible Purchase. You will not get cash back for amounts paid with a Promotional E-Certificate or Points. If you only spent a portion of your Promotional E-Certificate. The balance of your Promotional E-Certificate that was not used towards an Eligible Purchase will remain on your Promotional E-Certificate and can be used towards future Eligible Purchases until the Promotional ECertificate expires or has a zero balance
	
	q3) Can I earn Musicians Friend Rewards Program benefits or Points without making a purchase?
	a3) No purchase is required to join the Program You must make an Eligible Purchase in order to earn Points In addition, you must make at least two Eligible Purchases every 12 months in order to keep your Points active
	
	q4) How can I check the status on my order?
	a4) To track your order, click here You can also email usOpens a New Window or call us at 18004499128 for the status of your order Please have your order confirmation number or web PO number ready
	
	q5)My product is outside the return policy, and now Iam having problems with it What can I do?
	a5)The first step is to determine if your product is currently under warranty either through the manufacturer or through our Gold Coverage protection If you are unsure if your item is still under warranty you can typically find the warranty terms included in the manual with your product, or on the manufacturers website For Gold Coverage, call 18004499128 or email us and we can confirm if you are still within warranty If you are under warranty and would like to submit a claim through the manufacturer, most manufacturers accept requests through the support section of their website. Some will have you submit your claim through us however In order to do that, call or email us and have the following information ready for our support staff
	-->
