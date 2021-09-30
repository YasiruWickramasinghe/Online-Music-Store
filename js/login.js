function loginForm() {
  if (document.getElementById("user").value == 0) {
    alert("Invalid Attempt");
    return false;
	}
	else if (document.getElementById("pass").value == 0){
		alert("Invalid Attempt");
		return false;
	}
  else{
	alert("Login Successfull!");
	return true;
  }

  }
  