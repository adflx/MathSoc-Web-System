function LoginButton(){	
	var x =  document.getElementById("stunum");
	var y = document.getElementById("pass");
	
	if(x.innerHTML =="" || y.innerHTML=="" || x.innerHTML ==" " || y.innerHTML==" ")
		alert("Input ID number and password!");
}