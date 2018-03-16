<?php
//collection_model.php

function add_collection($sql){
	$tbl = "collection";
	
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





function get_collection($idd){
	
	$tbl = "collection";
	
	include "config.jw.php";
	
	$conn = new mysqli($host, $user, $pass, $db);
	
	if( mysqli_connect_errno($conn) ){
		echo "Unable to connect to DB server.";
	}
	
	
	
	$sql = "SELECT * FROM collection WHERE ID = '$idd'";
	
	$result = mysqli_query($conn, $sql);	

	
	$myrow=mysqli_fetch_row($result);
	
			 $info = array();
			$info['id'] = $myrow[0];
			$info['date'] = $myrow[1];
			$info['type'] = $myrow[2];
			$info['desc'] = $myrow[3];
			$info['quan'] = $myrow[4];
			$info['price'] = $myrow[5];
			$info['total'] = $myrow[6];
			$info['status'] = $myrow[7];
			
			
	
	
	return $info;
}




function get_collections(){
	
	$tbl = "collection";
	
	include "config.jw.php";
	
	$conn = mysqli_connect($host, $user, $pass, $db);
	
	
	if( mysqli_connect_errno($conn) ){
		echo "Unable to connect to DB server.";
	}
	
	
	
	$sql = "SELECT * FROM $tbl";
	
	
	
	$result = mysqli_query($conn, $sql);
	
	
	
	if( $myrow=mysqli_fetch_array($result) ){
		
		$collections = array();
		do{
			
			$info = array();
			$info['id'] = $myrow['ID'];
			$info['date'] = $myrow['DATE'];
			$info['type'] = $myrow['TYPE'];
			$info['desc'] = $myrow['DESCRIPTION'];
			$info['quan'] = $myrow['QUANTITY'];
			$info['price']= $myrow['PRICE'];
			$info['total']= $myrow['TOTAL'];
			$info['status']= $myrow['STATUS'];
			
			$collections[] = $info;		
			
		}while($myrow=mysqli_fetch_array($result));
		
	}else{
		$collections = '';
	}		
	return $collections;
}



function delete_collection($idd){
	$tbl = "collection";
	
	include "config.jw.php";
	
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "DELETE FROM collection WHERE ID='$idd'";

if ($conn->query($sql) === TRUE) {
  
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
}

function edit_collection($sql){
	$tbl = "collection";
	
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
$tbl = "collection";
	
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
function approve_collections($sql){
$tbl = "collection";
	
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