<?php
	include_once 'configProfile.php';
?>	

 <!DOCTYPE html>
<html>
	<head>
		<title> RhythmLK - Profile</title>
				<link rel="stylesheet" type="text/css" href="style/profile.css ">
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
						<a href="guitar.html">Guitar & Violin</a>
							<a href="keyboards.html">Keyboard</a>
							<a href="percussion.html">Percussion</a>
							<a href="flute.html">Flute</a>
					</div>
					
				</div> 
				
			<li class="menu"><a href="aboutus.html">About Us</a></</li>
			<li class="menu"><a href="contact.html">Contact Us</a></</li>
			<li class="menu"><a href="FAQs.php">FAQs</a></</li>
		
		</ul>
		
		
		<!--profile-->
		<div class="wrap">
			<div class="prof">
					<center>
						<h1>PROFILE</h1>
						<hr class="line" width="75%">
						<img src="images/user.jpg" alt="mainLogo" height="100" width="100">
					</center>

					<ul class="mn">
						<?php
						
						 $sql = "SELECT * FROM users"; //table name is FAQs
						 $result = $conn->query($sql);
						 if($result->num_rows > 0){
							while($row = $result->fetch_assoc()){
								echo"<h4>NAME:</h4>";
								echo"<li><h11>".$row["register_Name"]."<h11></li>"; 
								echo"<h4>EMAIL:</h4>";
								echo"<li><h11>".$row["register_Email"]."<h11></li>";
								echo"<h4>MOBILE NUMBER:</h4>";
								echo"<li><h11>".$row["register_Mobilenum"]."<h11></li>";
								echo"<h4>BIRTHDAY:</h4>";
								echo"<li><h11>".$row["register_Dob"]."<h11></li>";
								}
						} else {
								echo "0 result";
						}
						echo "</ul>";
							$conn->close();
						?>	

					
						
			</div>			
		</div>
		<!--footer-->
		
		<div class="footer" >
			
			<table class="table" align="right" position>
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
