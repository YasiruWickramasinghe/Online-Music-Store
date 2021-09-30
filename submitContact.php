<?php
	include_once 'configContact.php';
?>	

<?php
	//Escape user inputs for security
	$name = $_POST["Cname"];             //that is entered in html form button name
	$email = $_POST["Cemail"];
	$phone = $_POST["Cphone"];
	$massage = $_POST["Cmassage"];
	
	
	//Attemp insert quary execution          //this is table names                                                      //this names from up
	$sql = "INSERT INTO contactu (contact_ID,contact_Name,contact_Email	,contact_Phone,contact_Massage) VALUES ('','$name','$email','$phone','$massage')";
	if(mysqli_query($conn, $sql)){
		//echo"<script> alert('Record added successfully')"
		header("Location:home.php");
	}
	else{
			echo "<script> alert('ERROR: Could not able to execute')</script>";
		}	
		
	//close connection
		mysqli_close($conn)
?>		