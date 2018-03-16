<?php
//home controller
session_start();

if(isset($_SESSION['user'])){
	if( isset($_GET['request']) && strlen($_GET['request'])>0 ){
	switch($_GET['request']){
	case 'home': 
		dashboard();
		break;
	case 'member': 
		member();
		break;
	
	case 'officer':
	officer();
	break;
	case 'event': 
		event();
		break;
		case 'collection': 
		collection();
		break;
	case 'expense': 
		expense();
		break;
		case 'report': 
		report();
		break;
	case 'changepass':
		changepass();
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
	login();
}	

function dashboard(){

	include "views/home.php";
}

function officer(){

	include "views/officer_dashboard.php";
}

function member(){

	include "views/member_dashboard.php";
}

function event(){

	include "views/event_dashboard.php";
}

function collection(){

	include "views/collection_dashboard.php";
}

function expense(){

	include "views/expense_dashboard.php";
}

function report(){

	include "views/report_dashboard.php";
}


function login(){
	header("Location: login.php");
	die();
}

function changepass(){
	
	include "changepass.php";
}
?>