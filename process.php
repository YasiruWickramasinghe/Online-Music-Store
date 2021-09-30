<?php
	include_once 'config.php';
?>	

<?php
				$name = $_POST["Cname"];
				$username = $_POST["Cusrname"];
				$email = $_POST["Cemail"];
				$mobilenum = $_POST["Cmobnum"];
				$dateofbirth = $_POST["Cdob"];
				$psw = $_POST["Cpsw"];
				$repeatpsw = $_POST["Crnpwd"];
				
			$sql = "INSERT INTO users(register_ID,register_Name,register_Username,register_Email,register_Mobilenum,register_Dob,register_Psw,register_Rpwd) VALUES ('','$name','$username','$email','$mobilenum','$dateofbirth','$psw','$repeatpsw')";
			if(mysqli_query($conn, $sql)){
		//echo"<script> alert('Record added successfully')"
		header("Location:login.php");
	}
			
	else{
			echo "<script> alert('ERROR: Could not able to execute')</script>";
		}	
		
		?>