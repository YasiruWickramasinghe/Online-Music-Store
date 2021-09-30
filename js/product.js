function productForm() {
  if (document.getElementById("text").value == 0) {
    alert("Please Enter the Description!");
    return false;
  }
  else{
	alert("Successfull");
	return true;
  }