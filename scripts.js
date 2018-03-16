function LoginButton(){	
	var x =  document.getElementById("stunum");
	var y = document.getElementById("pass");
	
	if(x.innerHTML ===" " || y.innerHTML===" ")
		alert("Input ID number and password!");
	/*search database
	if hasMatch() then confirmLogin
	else alert not found
	*/
}

function RegisterOfficer(){
	var x =  document.getElementById("stunum2");
	var y = document.getElementById("pass2");
	var z =  document.getElementById("fullname");
	var a = document.getElementById("cys");
	var b =  document.getElementById("pos");
	
	if(x.innerHTML ===" " || y.innerHTML ==" " || z.innerHTML==" " || a.innerHTML==" "|| b.innerHTML==" ")
		alert("Complete required fields!");
	else{
		alert("Successfully Registered!");
	}
/* checks if account is already existing in the database, if not, store data

*/	
	
}

function SignUpButton(){
document.getElementById("register").style.display="block";
}
function hideForm(idName){
document.getElementById(idName).style.display="none";
}
						