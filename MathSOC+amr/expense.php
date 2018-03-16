<?php
//expense controller
session_start();
if(!isset($_SESSION['user'])){
if( isset($_GET['request']) && strlen($_GET['request'])>0 ){
	switch($_GET['request']){
	case 'new': 
		newexpense();
		break;
	case 'view': 
		viewexpenses();
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

		editexpenses($_GET['idno']);
		break;
		
	case 'pending':
		disapproveexpenses($_GET['idno']);
		break;
	
	case 'approve':
		approveexpenses($_GET['idno']);
		break;
		
	case 'back':
		dashboard();
		break;
	default:

		dashboard();
	}
	}
else{
	header("Location: login.php");
	die();
}

function dashboard(){

	include "views/expense_dashboard.php";
}

function newexpense(){

	
	include "models/expense_model.php";;
	
	if( $_SERVER['REQUEST_METHOD']=='POST' ){
	$d = $_POST;
		
		
		 $date = date_create($d['date']);
		$dated = date_format($date,"m-d-Y");
		$desc = $d['desc'];
		$type = $d['type'];
		$quan= $d['quan'];
		$amount= $d['amount'];
		$total= $quan*$price;
		
		
		
		
		$sql = "INSERT expenses SET DATE='$dated' ,DESCRIPTION='$desc' ,QUANTITY='$quan' ,AMOUNT='$amount',TOTAL='$total',STATUS='PENDING'";

	
		edit_expense($sql);
		
		
		include "views/new_expensesuc.php";
		
		
	}else{
		
		
		include "views/new_expense.php";
	}
}

function viewexpenses(){
	
	include "models/expense_model.php";
	$expenses = get_expenses();
	include "views/display_expenses.php";
}

function approveexpenses($idd){
	$id=$idd;
	include "models/expense_model.php";
		
		
		$sql = "UPDATE expenses SET STATUS ='APPROVED' WHERE ID='$id'";
		
	
		approve_expenses($sql);
		
		include "views/edit_expensesuc.php";
		
	
	
}

function disapproveexpenses($idd){
	$id=$idd;
	include "models/expense_model.php";
		
		$sql = "UPDATE expenses SET STATUS ='PENDING' WHERE ID='$id'";
		
	
		pending($sql);
		
		include "views/edit_expensesuc.php";
		
	
}

function editexpenses($idd){
	$id=$idd;
	include "models/expense_model.php";
		if( $_SERVER['REQUEST_METHOD']=='POST' ){
		
		$d = $_POST;
		
		
		 $date = date_create($d['date']);
		$dated = date_format($date,"m-d-Y");
		$desc = $d['desc'];
		$quan= $d['quan'];
		$amount= $d['amount'];;
		$total= $quan*$price;
		$status=$d['status'];
		$sql = "UPDATE expenses SET DATE='$dated' ,DESCRIPTION='$desc' ,QUANTITY='$quan' ,AMOUNT='amount',TOTAL='$total' WHERE ID='$id'";

	
		edit_expense($sql);
		
		include "views/edit_expensesuc.php";
		
	}else{
		
	$expense=get_expense($id);

	include "views/edit_expense.php";
	}

	
}



?>