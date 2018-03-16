<?php
//home controller
session_start();


if(!isset($_SESSION['user'])){
	include "views/login.php";
if(isset($_POST['idnum']) && isset($_POST['password'])){
	//print_r($_POST);
	include "models/officer_model.php";
	
	$idnum = $_POST['idnum'];
	$pass = $_POST['password'];
	echo 'bruuh';
	if(login_officer($idnum,$pass)){
		echo '<script language="javascript">';
		echo 'alert("Blah");';
		echo '</script>';
		echo 'Logged in!';
		$_SESSION['user'] = $idnum;
		$_SESSION['position'] = getOfficer($idnum);
		$_SESSION['name'] = getOfficerName($idnum);
		//print_r($_SESSION);
		header("Location: index.php?request='home'");
		exit();
		die();
	}
	else{
		$_SESSION['error'] = "Invalid ID Number or password!";
		header("Location: index.php");
		die();
		echo '<script language="javascript">document.getElementById("loginerror").value("INVALID ID NUMBER OR PASSWORD");</script>';
		echo 'Invalid ID Number or password!';
		die();
	}
}
}
else{
	header("Location: index.php");
	die();
}

?>