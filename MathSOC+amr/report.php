<?php
//report controller

session_start();

if(isset($_SESSION['user'])){
if( isset($_GET['request']) && strlen($_GET['request'])>0 ){
	switch($_GET['request']){
	case 'report': 
		expenses();
		events();
		break;
		
	case 'exreport':
		expenses();
		break;
		
	case 'evreport':
		events();
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

		editreports($_GET['idno']);
		break;
	case 'delete':
	deletereports($_GET['idno']);
	break;
	case 'pay':
	confirm($_GET['idno']);
	break;
	case 'back':
	dashboard();
	break;
	default:
	
	

		dashboard();
	}
	
	}else{

	dashboard();
	
}
	}
else{
	header("Location: login.php");
	die();
}

function dashboard(){

	include "views/report_dashboard.php";
}

function newreport(){

	
	include "models/report_model.php";;
	
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
		$sex = $d['sex'];
		$prof = $d['prof'];
		$sub = $d['sub'];
		$datepay = "00-00-0000";
		$paystat = "NOT PAID";
		
		
		
		$sql = "INSERT INTO report
				(idno,lname,fname,mi,course,sex,professor,subject,datepay,paystat)
				VALUES('$sid','$lname','$fname',
				'$mi','$course','$sex','$prof','$sub','$datepay','$paystat')";		
	
		add_report($sql);
		
		include "views/new_reportsuc.php";
		
		
	}else{
		
		
		include "views/new_report.php";
	}
}

function viewreports(){
	
	include "models/report_model.php";
	$reports = get_reports();
	include "views/display_reports.php";
}

function deletereports($report){
	include "models/report_model.php";
	delete_report($report);
	include "views/delete_report.php";
}

function editreports($idd){
	$id=$idd;
	include "models/report_model.php";
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
		$sex = $d['sex'];
		$prof = $d['prof'];
		$sub = $d['sub'];
		$date = date_create($d['datepay']);
		$datepay = date_format($date,"m-d-Y");
		$paystat = $d['paystat'];
		$sql = "UPDATE report SET idno='$sid' ,lname='$lname' ,fname='$fname' ,mi='$mi' ,course='$course' ,sex='$sex' ,professor='$prof' ,subject='$sub' ,datepay='$datepay' ,paystat='$paystat' WHERE idno='$idd'";

	
		edit_report($sql);
		
		include "views/edit_reportsuc.php";
		
	}else{
		
	$report=get_report($id);

	include "views/edit_report.php";
	}

	
}


function confirm($idno){
	
	include "models/report_model.php";
	payment($idno);
	include "views/confirmpay.php";
}

function expenses(){
	include "models/report_model.php";
	$expenses= connex();
	include "views/display_report_expenses.php";
	}	
function events(){
	include "models/report_model.php";
	$events= connev();
	include "views/display_report_events.php";
}

function report(){
	include "model/report)model.php";
	$report= report();
	include "views/display_report.php";
}
?>