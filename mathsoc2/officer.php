<?php
//officer controller

session_start();
if(isset($_SESSION['user'])){
if( isset($_GET['request']) && strlen($_GET['request'])>0 ){
	switch($_GET['request']){
	
	case 'view': 
		viewofficer();
		break;
	
	case 'back':
	dashboard();
	break;
	default:

		dashboard();
	}
}
	else if((isset($_GET['rquest']) && strlen($_GET['rquest'])>0) && (isset($_GET['idno']) && strlen($_GET['idno']))>0){
	
	switch($_GET['rquest']){
	
	case 'edit':

		editofficers($_GET['idno']);
		break;
	
	
	case 'back':
	dashboard();
	break;
	default:
	
	

		dashboard();
	}
	}
else{

	dashboard();
	
}
}
else{
	header("Location: login.php");
	die();
}

function dashboard(){

	include "views/officer_dashboard.php";
}


function viewofficer(){
	
	include "models/officer_model.php";
	$officers = get_officers();
	include "views/display_officer.php";
}



function editofficers($idd){
	$id=$idd;
	include "models/officer_model.php";
		if( $_SERVER['REQUEST_METHOD']=='POST' ){
		
		$d = $_POST;
		
		$id1 = $d['id1'];
		$id2= $d['id2'];
		$id3 = $d['id3'];
		$sid= $id1."-".$id2."-".$id3;
		$lname = $d['lname'];
		$fname = $d['fname'];
		$mi = $d['mi'];
		$course = $d['course'];
		$year = $d['year'];
		$section = $d['section'];
		
		$sql = "UPDATE officers SET studID='$sid' ,lname='$lname' ,fname='$fname' ,mi='$mi' ,course='$course' ,year='$year' ,section='$section'  WHERE studID='$idd'";

	
		edit_officer($sql);
		
		include "views/edit_officersuc.php";
		
	}else{
		
	$officer=get_officer($id);

	include "views/edit_officer.php";
	}

	
}



?>