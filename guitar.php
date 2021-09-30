<?php
	include_once 'configProduct.php';
?>	


<!DOCTYPE html>
<html>
	<head>
		<title>RhythmLK - Guitars</title>
			<link rel="stylesheet" type="text/css" href="style/guitarstyle.css">
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
		<!-- Menu -->
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
<br>	



<u><h2 style="text-align:center">Guitars</h2></u>
<br>


		
		<?php
						
					 $sql = "SELECT * FROM products"; //table name is FAQs
					 $result = $conn->query($sql);
					 if($result->num_rows > 0){
					 
					while ($row = mysqli_fetch_array($result)) {
						
						echo "<form action=productfinal.php method =post class='container'>";
						echo "<div id='img_div'>";
						echo "<img src='images/".$row['image']."' ><br><br>";
						echo "<h9><b>".$row['product_name']."<b><h9><br><br>";
						echo "<h9>Rs.".$row['product_price']."</h9><br><br>";
						echo "<h9>".$row['product_description']."</h9><br><br>";
						echo "</div>";
					
					}
							} else {
									echo "0 result";
							}
							echo "</ul>";
								$conn->close();	
				?>	
    </div>
	
	<br>
	

	
	
	
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
