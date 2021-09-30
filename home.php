<?php
session_start();
if(!$_SESSION['useraccounts'])
{
		header('location:login.php');
}
?>		

 <!DOCTYPE html>
<html>
	<head>
		<title> RhythmLK</title>
				<link rel="stylesheet" type="text/css" href="style/homestyle.css ">
				<link rel="stylesheet" type="text/css" href="1.css ">
				<script src="js/slideshow.js"></script>

	</head>
	<header>
		<!--Logo-->
		<a href="home.php"><img src="images/icon3.png" alt="RhythmLK" height="100" width="100" class="logo"></a>
		
		<!--User-->
		<div class="user">
			<a href="profile.php"><img src="images/user.jpg" alt="User" height="50" width="50"></a><br>
			PROFILE<br>
			
			<!--Logout Button-->
			<div class="btn">
				<a href="login.php"><button type="button" >LOGOUT</button></a>
			</div>
		</div>
	
	
	
		<!--Title-->
		<center>
			<h2>RhythmLK</h2>
		</center>
	
	</header>



<body>
	<!--Menu-->
	<ul class="menu">

		
		<li class="menu" ><a href="home.php">Home</a></li>
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
	
	<!--slide show-->
		<div class="slider">
		
		</div>
	
	
	
	<!--container box-->
	<center>
	<div class="container">
		<ul>
			<li>
				<a href="guitar.php" >
					<div class="hover"><img src="images/guitar.png" width="315px" height="315px"></div>
					<br>
					
				</a>
			</li>
			<li>
				<a href="keyboards.html">
					<div><img src="images/keyboard.png" width="315px" height="315px"></div>
					<br>
					
				</a>
			</li>
			<li>
				<a href="percussion.html">
					<div><img src="images/percussion.png" width="315px" height="315px"></div>
					<br>
					
				</a>
			</li>
			<li>
				<a href="flute.html">
					<div><img src="images/flute.png" width="315px" height="315px"></div>
					
					
				</a>
			</li>
			
		</ul>
	</div>
	</center>
	
	<!--Footer-->
	<div class="footer">
	
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
