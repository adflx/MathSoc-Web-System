<?php
//collection controller
session_start();
if(!isset($_SESSIONS['user'])){
if( isset($_GET['request']) && strlen($_GET['request'])>0 ){
	switch($_GET['request']){
	case 'new': 
		newcollection();
		break;
	case 'view': 
		viewcollections();
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

		editcollections($_GET['idno']);
		break;
		
	case 'pending':
		disapprovecollections($_GET['idno']);
		break;
	
	case 'approve':
		approvecollections($_GET['idno']);
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
}else{
	header("Location: login.php");
	die();
}

function dashboard(){

	include "views/collection_dashboard.php";
}

function newcollection(){

	
	include "models/collection_model.php";;
	
	if( $_SERVER['REQUEST_METHOD']=='POST' ){
	$d = $_POST;
		
		
		 $date = date_create($d['date']);
		$dated = date_format($date,"m-d-Y");
		$desc = $d['desc'];
		$type = $d['type'];
		$quan= $d['quan'];
		$price = $d['price'];
		$total= $quan*$price;
		
		
		
		
		$sql = "INSERT collection SET DATE='$dated' ,DESCRIPTION='$desc' ,TYPE='$type' ,QUANTITY='$quan' ,PRICE='$price',TOTAL='$total',STATUS='PENDING'";

	
		edit_collection($sql);
		
		
		include "views/new_collectionsuc.php";
		
		
	}else{
		
		
		include "views/new_collection.php";
	}
}

function viewcollections(){
	
	include "models/collection_model.php";
	$collections = get_collections();
	include "views/display_collections.php";
}

function approvecollections($idd){
	$id=$idd;
	include "models/collection_model.php";
		
		
		$sql = "UPDATE collection SET STATUS ='APPROVED' WHERE ID='$id'";
		
	
		approve_collections($sql);
		
		include "views/edit_collectionsuc.php";
		
	
	
}
function disapprovecollections($idd){
	$id=$idd;
	include "models/collection_model.php";
		
		$sql = "UPDATE collection SET STATUS ='PENDING' WHERE ID='$id'";
		
	
		pending($sql);
		
		include "views/edit_collectionsuc.php";
		
	
		
	
	
	
	
}

function editcollections($idd){
	$id=$idd;
	include "models/collection_model.php";
		if( $_SERVER['REQUEST_METHOD']=='POST' ){
		
		$d = $_POST;
		
		
		 $date = date_create($d['date']);
		$dated = date_format($date,"m-d-Y");
		$desc = $d['desc'];
		$type = $d['type'];
		$quan= $d['quan'];
		$price = $d['price'];
		$total= $quan*$price;
		$status=$d['status'];
		$sql = "UPDATE collection SET DATE='$dated' ,DESCRIPTION='$desc' ,TYPE='$type',QUANTITY='$quan' ,PRICE='$price',TOTAL='$total' WHERE ID='$id'";

	
		edit_collection($sql);
		
		include "views/edit_collectionsuc.php";
		
	}else{
		
	$collection=get_collection($id);

	include "views/edit_collection.php";
	}

	
}



?>