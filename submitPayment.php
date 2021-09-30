<?php
	include_once 'configPayment.php';
?>	

<?php
	//Escape user inputs for security
	$pname = $_POST["payname"]; 
	$pcontact = $_POST["paycontact"]; 
	$paddress = $_POST["payaddress"]; 
	$pquantity = $_POST["payquantity"]; 
	$payment = $_POST["payment"]; 
	$pholderN = $_POST["payCHname"]; 
	$pcrdN = $_POST["paycardnumber"]; 
	$pmonth = $_POST["paymonth"]; 
	$pyear = $_POST["payyear"]; 	
	$psecureC = $_POST["paySecuritycode"];

	
	
	//Attemp insert quary execution          //this is table names                                                      //this names from up
	$sql = "INSERT INTO paymentU1 (pa_ID,pa_name,pa_contact,pa_add,pa_qua,pa_pay,pa_hol,pa_crdnum,pa_mon,pa_year,pa_secu) VALUES ('','$pname','$pcontact','$paddress','$pquantity','$payment','$pholderN','$pcrdN','$pmonth','$pyear','$psecureC')";
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