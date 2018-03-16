<?php
//event controller


session_start();
if(isset($_SESSION['user'])){
if( isset($_GET['request']) && strlen($_GET['request'])>0 ){
	switch($_GET['request']){
	case 'new': 
		newevent();
		break;
	case 'view': 
		viewevents();
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

		editevents($_GET['idno']);
		break;
	case 'delete':
	deleteevents($_GET['idno']);
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

	include "views/event_dashboard.php";
}

function newevent(){

	
	include "models/event_model.php";;
	
	if( $_SERVER['REQUEST_METHOD']=='POST' ){
		
		$d = $_POST;
		
		// $id1 = $d['id1'];
		// $id2= $d['id2'];
		// $id3 = $d['id3'];
		// $sid= $id1."-".$id2."-".$id3;
		// $lname = $d['lname'];
		// $fname = $d['fname'];
		// $mi = $d['mi'];
		// $course = $d['course'];
		// $sex = $d['sex'];
		// $prof = $d['prof'];
		// $sub = $d['sub'];
		// $datepay = "00-00-0000";
		// $paystat = "NOT PAID";
		
		
		
		// $sql = "INSERT INTO event
				// (idno,lname,fname,mi,course,sex,professor,subject,datepay,paystat)
				// VALUES('$sid','$lname','$fname',
				// '$mi','$course','$sex','$prof','$sub','$datepay','$paystat')";		
	
		// add_event($sql);
		
		include "views/new_eventsuc.php";
		
		
	}else{
		
		
		include "views/new_event.php";
	}
}

function viewevents(){
	
	include "models/event_model.php";
	$events = get_events();
	include "views/display_events.php";
}

function deleteevents($event){
	include "models/event_model.php";
	delete_event($event);
	include "views/delete_event.php";
}

function editevents($idd){
	$id=$idd;
	include "models/event_model.php";
		if( $_SERVER['REQUEST_METHOD']=='POST' ){
		
		$d = $_POST;
		
		// $id1 = $d['id1'];
		// $id2= $d['id2'];
		// $id3 = $d['id3'];
		// $sid= $id1."-".$id2."-".$id3;
		// $lname = $d['lname'];
		// $fname = $d['fname'];
		// $mi = $d['mi'];
		// $course = $d['course'];
		// $sex = $d['sex'];
		// $prof = $d['prof'];
		// $sub = $d['sub'];
		// $date = date_create($d['datepay']);
		// $datepay = date_format($date,"m-d-Y");
		// $paystat = $d['paystat'];
		// $sql = "UPDATE event SET idno='$sid' ,lname='$lname' ,fname='$fname' ,mi='$mi' ,course='$course' ,sex='$sex' ,professor='$prof' ,subject='$sub' ,datepay='$datepay' ,paystat='$paystat' WHERE idno='$idd'";

	
		// edit_event($sql);
		
		include "views/edit_eventsuc.php";
		
	}else{
		
	$event=get_event($id);

	include "views/edit_event.php";
	}

	
}


?>