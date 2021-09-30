<?php
if($_POST)
{
	$host="localhost";
	$user="root";
	$pass="";
	$db="useraccounts";
	
	$username=$_POST['uname'];
	$password=$_POST['pws'];
	
	$conn= mysqli_connect($host,$user,$pass,$db);
		$query="SELECT  * from users where register_Username = '$username' and  register_Psw ='$password'";
			$result=mysqli_query($conn,$query);
			if(mysqli_num_rows($result) == 1)
			{
					session_start();
					$_SESSION['useraccounts']='true';
					header('location:home.php');
			}
			else {echo 'wrong username or password';}  	
}  
?>
<!DOCTYPE html>
<html>
		<head>
		  <title> RhythmLK - Login </title>
		  
				<script src="js/login.js"></script>
				<link rel="stylesheet" href= "style/style.css">
				<a href="login.php"></a>
		</head>
 <body>
 
	<form method="POST">
		<div class = "img"> 
			<div class="logbox">
				<h1> Login </h1>
			 
					<div class="textbox">
						<p> Username</P>
						<input type="text" placeholder = "Enter Username" name="uname" id="user" required>
						
					</div>
									 
					<div class="textbox">
						<p> Password</P>
						<input type ="password" placeholder ="Eneter Password" name ="pws" id="pass" required>
					</div>

					<a href="home.php">
							<input class="btn" type ="submit"  value="Login" onclick="loginForm()">
					</a>
					<p class = "message"> Not registered? <a href="register.html">Create an account </a> </P> 
			</div>	
						
		</div>
	</form>	
</body>

</html>