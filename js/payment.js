function paymentForm() {
  if (document.getElementById("quantity").value == 0) {
    alert("Please Enter Quantity you want!");
    return false;
  }
  else{
	alert("Payment Successfull");
	return true;
  }

  
}