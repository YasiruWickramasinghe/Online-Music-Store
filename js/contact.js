function productForm() {
  if (document.getElementById("message").value == 0) {
    alert("Please Enter Your Message");
    return false;
  }
  else{
	alert("Successfull");
	return true;
  }
}