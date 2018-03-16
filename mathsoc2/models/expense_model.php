<?php
//expense_model.php

function add_expense($sql){
	$tbl = "expenses";
	
	include "config.jw.php";
	
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



if ($conn->query($sql) === TRUE) {
  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}





function get_expense($idd){
	
	$tbl = "expenses";
	
	include "config.jw.php";
	
	$conn = new mysqli($host, $user, $pass, $db);
	
	if( mysqli_connect_errno($conn) ){
		echo "Unable to connect to DB server.";
	}
	
	
	
	$sql = "SELECT * FROM expenses WHERE ID = '$idd'";
	
	$result = mysqli_query($conn, $sql);	

	
	$myrow=mysqli_fetch_row($result);
	
			 $info = array();
			$info['id'] = $myrow[0];
			$info['date'] = $myrow[1];
			$info['desc'] = $myrow[2];
			$info['quan'] = $myrow[3];
			$info['amount'] = $myrow[4];
			$info['total'] = $myrow[5];
			$info['status'] = $myrow[6];
			
			
	
	
	return $info;
}




function get_expenses(){
	
	$tbl = "expenses";
	
	include "config.jw.php";
	
	$conn = mysqli_connect($host, $user, $pass, $db);
	
	
	if( mysqli_connect_errno($conn) ){
		echo "Unable to connect to DB server.";
	}
	
	
	
	$sql = "SELECT * FROM $tbl";
	
	
	
	$result = mysqli_query($conn, $sql);
	
	
	
	if( $myrow=mysqli_fetch_array($result) ){
		
		$expenses = array();
		do{
			
			$info = array();
			$info['id'] = $myrow['ID'];
			$info['date'] = $myrow['DATE'];
			$info['desc'] = $myrow['DESCRIPTION'];
			$info['quan'] = $myrow['QUANTITY'];
			$info['amount']= $myrow['AMOUNT'];
			$info['total']= $myrow['TOTAL'];
			$info['status']= $myrow['STATUS'];
			
			$expenses[] = $info;		
			
		}while($myrow=mysqli_fetch_array($result));
		
	}else{
		$expenses = '';
	}		
	return $expenses;
}



function delete_expense($idd){
	$tbl = "expenses";
	
	include "config.jw.php";
	
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "DELETE FROM expenses WHERE ID='$idd'";

if ($conn->query($sql) === TRUE) {
  
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
}

function edit_expense($sql){
	$tbl = "expenses";
	
	include "config.jw.php";
	
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



if ($conn->query($sql) === TRUE) {
  //  echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
}

function pending($sql){
$tbl = "expenses";
	
	include "config.jw.php";
	
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



if ($conn->query($sql) === TRUE) {
  //  echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
}
function approve_expenses($sql){
$tbl = "expenses";
	
	include "config.jw.php";
	
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



if ($conn->query($sql) === TRUE) {
  //  echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
}

?>