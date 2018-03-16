
<?php

function connex(){
	$tbl = "expenses";
	
	include "config.jw.php";
	
	$conn = mysqli_connect($host, $user, $pass, $db);
	
	
	if( mysqli_connect_errno($conn) ){
		echo "Unable to connect to DB server.";
	}
	
	
	
	$sql = "SELECT * FROM $tbl";
	
	
	
	$result = mysqli_query($conn, $sql);
	
	
	
	if( $row=mysqli_fetch_array($result) ){
		$expenses=array();	
		do{
		$exx=array();
		$exx["ID"]= $row['ID'];
		$exx["DATE"]= $row['DATE'];
		$exx["ITEM_DESCRIPTION"]= $row['ITEM_DESCRIPTION'];
		$exx["QUANTITY"]= $row['QUANTITY'];
		$exx["AMOUNT"]= $row['AMOUNT'];
		$exx["TOTAL"]= $row['TOTAL'];
		$exx["STATUS"]= $row['STATUS'];
		$expenses[]=$exx;
	}while($row=mysqli_fetch_array($result));
		
	}else{
		$expenses= '';
	}		
		return $expenses;

}

function connev(){
	$tbl = "events";
	include "config.jw.php";
	
	$conn = mysqli_connect($host, $user, $pass, $db);
	
	
	if( mysqli_connect_errno($conn) ){
		echo "Unable to connect to DB server.";
	}
		
	$sql = "SELECT * FROM $tbl";
	
	
	
	$result = mysqli_query($conn, $sql);
	
	
	
	if( $row=mysqli_fetch_array($result) ){
		$events=array();	
		do{
		$evv=array();
		$evv["event_num"]= $row['event_num'];
		$evv["project_title"]= $row['project_title'];
		$evv["date"]= $row['date'];
		$evv["enddate"]= $row['enddate'];
		$evv["venue"]= $row['venue'];
		$evv["event_description"]= $row['event_description'];
		$evv["event_details"]= $row['event_details'];
		$evv["status"]= $row['status'];
		$events[]=$evv;
	}while($row=mysqli_fetch_array($result));
		
	}else{
		$events= '';
	}		
	return $events;
}
?>