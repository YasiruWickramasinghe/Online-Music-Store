<?php
	include_once 'configFAQs.php';
?>	

<?php
	//Escape user inputs for security
	$question = $_POST["FAQ_question"];             //that is entered in html form button name
	$answer = $_POST["FAQ_answer"];
	
	
	
	//Attemp insert quary execution          //this is table names       //this names from up
	$sql = "INSERT INTO FAQs (FAQ_ID,FAQ_Question,FAQ_Answer) VALUES ('','$question','$answer')";
	if(mysqli_query($conn, $sql)){
		//echo"<script> alert('Record added successfully')"
		header("Location:FAQs.php");
	}
	else{
			echo "<script> alert('ERROR: Could not able to execute')</script>";
		}	
		
	//close connection
		mysqli_close($conn)
?>		