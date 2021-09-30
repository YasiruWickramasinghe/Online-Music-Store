/* Request Form */
function validateForm() {
  if (document.getElementById("psw").value != document.getElementById("rpsw").value) {
    alert("Password Mismatch!");
    return false;
	}
  else if(document.getElementById("psw").value == document.getElementById("rpsw").value){
	alert("Success!");
	return true;
  }

  }