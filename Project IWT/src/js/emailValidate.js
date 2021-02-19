function validateEmail(email){
	if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
	{
		return(true)
	}
	alert("You have Entered invalide email ! ")
	return(false)
}

var userF_name = document.getElementById("f_name");
var userL_name = document.getElementById("l_name");
var userEmail = document.getElementById("pemail");
var userPassword = document.getElementById("password");

function validateForm(){

	var validFName = stringLength(userF_name.value);
	var validLName = stringLength(userL_name.value);
	var validEmail = validateEmail(userEmail.value);
	var validPassword = stringLength(userPassword.value);
	
	if( validFName == false || lidLName == false || validEmail == false || validPassword == false){
		return false;
	}
	
}
function stringLength(inputtxt)
{ 
var field = inputtxt.value; 
var mxlen = 50;

if(field.length > mxlen)
{
	switch (field){
		case userF_name.value : document.getElementById("pf1").innerHTML = "Maximum characters limite is 50 ! ";
								break;
		case userL_name.value : document.getElementById("pf2").innerHTML = "Maximum characters limite is 50 ! ";
								break;
		case userPassword.value : document.getElementById("pf3").innerHTML = "Maximum characters limite is 50 ! ";
								break;
	}
	return false;
}
	else
	{ 
		return true;
	}
}
function showPasword() {
  var inPsw = document.getElementById("psw1");
  if (inPsw.type === "password") {
    inPsw.type = "text";
  } 
  		else {
    		inPsw.type = "password";
  		}

}