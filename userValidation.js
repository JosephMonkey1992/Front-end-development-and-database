function checkForm() 
{
	var name;
  	if ( checkUsername() && checkEmail() && checkPassword()){
		name=document.jform.username.value;
		alert("Hello, "+name+": Welcome to Carey Secret Recipe Book.");
		return true;
	} else {
		return false;
	}
}

function checkUsername() {
	var userName=document.jform.username.value;
	if (userName=="") {
		alert ("Please enter your username.");
		document.jform.username.focus();
		return false;
	}
	return true;
}

function checkEmail() {
	var jhuEmail=document.jform.email.value;
	if (jhuEmail=="") {
		alert ("Please enter your @jhu.edu email.");
		document.jform.email.focus();
		return false;
	} 
	else if (!(jhuEmail.includes("@jhu.edu"))) {
		alert ("Please enter your @jhu.edu email.");
		document.jform.email.value="";
		document.jform.email.focus();
		return false;
	}
	return true;
}

function checkPassword() {
	var password=document.jform.password.value;
	if (password=="") {
		alert ("Please enter a password for your account.");
		document.jform.password.value="";
		document.jform.password.focus();
		return false;
	}
	else if (password.length<5){
		alert ("Please enter a password with more than 5 digits.");
		document.jform.password.value="";
		document.jform.password.focus();
		return false;
	}
	return true;
}


