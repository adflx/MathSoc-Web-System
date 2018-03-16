 function load(){
		 var d=new Date();
		 
//		alert(d.getMonth());
		
			  if(d.getMonth()=="3" || d.getMonth()=="4" ){	
			  document.getElementById('dd').style.visibility = 'visible';
			  }
			  else{
				  document.getElementById('dd').style.visibility = 'hidden';
			  }
		
		 
	 }
	


$(document).ready(function(){
	
	
$('.link-edit').click(function(){
		// alert('hi');
		// return false;
		var ans = confirm("Do you want to edit this member record?");
		
		if( ans==false )
			return false;
			
	});
	
	$('.link-pay').click(function(){
		
		var ans = confirm("Do you want to confirm this membership?"
		+"\n"+"ID Number: ");
		
		if( ans==false )
			return false;
			
	});
	
	$('.link-submit').click(function(){
		
		var ans = confirm("Are you want to submit this information?");
		
		if( ans==false )
			return false;
			
	});
		
	
	$('input[name="paystat"]').on('click', function() {
	//	alert($(this).val());
    if ($(this).val() == 'PAID') {
		
           $('#dd').removeAttr("disabled");
		   $('#dd').attr("required","required");
		  
    }
		
    else if($('input[name="paystat"]').val() == "NOT PAID"){
        $('#dd').attr("disabled","disabled");
		 $('#dd').removeAttr("required");	
    }
});
 
			
}); 
		
