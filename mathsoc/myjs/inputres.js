function isNumberKey(evt)
					{
								var charCode = (evt.which) ? evt.which : evt.keyCode;
					  if (charCode > 31 
						&& (charCode < 48 || charCode > 57))
						 return false;

					  return true;
					}
					
					function isAlfa(evt) {
					//evt = (evt) ? evt : window.event;
					var charCode = (evt.which) ? evt.which : evt.keyCode;
					if (charCode > 31 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122)) {
						return false;
					}
					return true;
				}





						function validateForm(){
							var x = document.forms["studentf"]["id1"].value;
							var y= document.forms["studentf"]["id2"].value;
							var z= document.forms["studentf"]["id3"].value;
							// var resid= /^[0-9]+$/;
							// var resname= /^[a-zA-Z]+$/
							// var lna= document.forms["studentf"]["lname"].value
							// var fna= document.forms["studentf"]["fname"].value
							// var mna= document.forms["studentf"]["mi"].value
							// var prona= document.forms["studentf"]["prof"].value
							// var courna= document.forms["studentf"]["course"].value
							var lengx=x.length,lengy=y.length,lengz=z.length;
							var idleng=lengx+lengy+lengz;
							// var chx=0,chy=0,chz=0,chl=0,chf=0,chm=0,chp=0,chc=0;
							// if(x.match(resid)){
								// chx++;
							// }
							// if(y.match(resid)){
								// chy++;
							// }
							// if(z.match(resid)){
								// chz++;
							// }
							// if(lna.match(resname)){
								// chl++;
							// }if(fna.match(resname)){
								// chf++;
							// }
							// if(prona.match(resname)){
								// chp++;
							// }
							// if(courna.match(resname)){
								// chc++;
							// }
							// if(mna.match(resname)){
								// chm++;
							// }
							if(idleng!=8){
								alert("Invalid ID");
								return false;
								
							}
							else{
								alert("Click ok to continue registration");
								return true;
								
							}
							
						}