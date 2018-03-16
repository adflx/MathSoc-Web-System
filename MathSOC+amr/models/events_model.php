<?php
function events_add($sql){
	$events = "events";
	include "config.jw.php";
	$conn = new mysqli($host, $user, $pass, $db);

	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}	 
	if ($conn->query($sql) === TRUE) 
	{
		 
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();	
}

function images_add($sql){
	//$events = "events";
	include "config.jw.php";
	$conn = new mysqli($host, $user, $pass, $db);

	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}	 
	if ($conn->query($sql) === TRUE) 
	{
		 
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();	
}

function events_display(){
	include "config.jw.php";
	$conn=mysqli_connect($host,$user,$pass,$db);
	if(mysqli_connect_errno($conn))
	{
		
	}
	else
	{
		 
	}
	
	$sql = "SELECT * FROM events where status='DONE' or status='UPCOMING'";
	$result = mysqli_query($conn,$sql);
	$events = array();
	if( $myrow=mysqli_fetch_array($result)){
		do{
			$tmp = array();
			$tmp['eventnum'] = $myrow['event_num'];
				$ebenum=$myrow['event_num'];
				$db = mysqli_connect("localhost","root","","math");
				$sql = "SELECT * FROM images WHERE event_num='$ebenum'";
				$sth = $db->query($sql);
				$tmp['image'] = mysqli_fetch_array($sth);
		
			$tmp['title'] = $myrow['project_title'];
			$tmp['date'] = $myrow['date'];
			$tmp['end'] = $myrow['enddate'];
			$tmp['venue']= $myrow['venue'];
			$tmp['descrip']= $myrow['event_description'];
			$tmp['details']= $myrow['event_details'];
			$tmp['stat']= $myrow['status'];
			
			$events[] = $tmp;
	
		}while($myrow=mysqli_fetch_array($result));
	}
	
	return $events;
	
}

function events_edit($sql){
	$events = "events";
	include "config.jw.php";
	$conn = new mysqli($host, $user, $pass, $db);
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	} 
//	$sql = "UPDATE events SET  project_title='nada',date='rei',enddate='wala',venue='zilch',event_description='wala',event_details='zilch',status="CANCELLED" Where event_num = '".$even."' ";
	if ($conn->query($sql) === TRUE) 
	{
  
	} 
	else 
	{
		echo "Error deleting record: " . $conn->error;
	}
	$conn->close();
}

function get_event($event_num){
	$tbl = "events";
	include "config.jw.php";
	$conn = new mysqli($host, $user, $pass, $db);
	if( mysqli_connect_errno($conn) ){
		echo "Unable to connect to DB server.";
	}
	
	$sql = "SELECT * FROM events WHERE event_num = '$event_num'";
	$result = mysqli_query($conn, $sql);	
	$myrow=mysqli_fetch_row($result);
	
		$info = array();
		$info['event_num'] = $myrow[0];
		$info['project_title'] = $myrow[1];
		$info['date'] = $myrow[2];
	//	$info['date'] = date("m/d/y", $petsa);
	//	print_r($info['date']); 	
	//	print_r($myrow[2]);
	//	$date=new DateTime($myrow[2]);
	//	echo $date->format("m/d/y");
		$info['enddate'] = $myrow[3];
		$info['venue'] = $myrow[4];
		$info['event_description'] = $myrow[5];
		$info['event_details'] = $myrow[6];
		$info['status']= $myrow[7];
			
	return $info;
}

function get_lastnum($year){
	$tbl = "events";
	include "config.jw.php";
	$conn = new mysqli($host, $user, $pass, $db);
	if( mysqli_connect_errno($conn) ){
		echo "Unable to connect to DB server.";
	}
	
	$sql = "SELECT * FROM events where event_num like '%$year%' ORDER BY event_num DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);	
	if($myrow=mysqli_fetch_row($result)){
		$info= $myrow[0];
	}else{
		$info=0;
	}
	//	print_r($info);
		return $info;
}
?>