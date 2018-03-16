<?php
//member_model.php

function add_student($sql){
	$tbl = "student";
	
	include "config.jw.php";
	
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



if ($conn->query($sql) === TRUE) {
	include "views/new_membersuc.php";
  
} else {
	include "views/new_member.php";
	echo'
	<script>
	alert("Duplicate Record");
	</script>
	';
	//header("views/new_member.php");
  // echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}

function get_student($idd){
	
	$tbl = "student";
	
	include "config.jw.php";
	
	$conn = new mysqli($host, $user, $pass, $db);
	
	if( mysqli_connect_errno($conn) ){
		echo "Unable to connect to DB server.";
	}
	
	
	
	$sql = "SELECT * FROM student WHERE idno = '$idd'";
	
	$result = mysqli_query($conn, $sql);	

	
	$myrow=mysqli_fetch_row($result);
	
			 $info = array();
			$info['id'] = $myrow[0];
			$info['lname'] = $myrow[1];
			$info['fname'] = $myrow[2];
			$info['mi'] = $myrow[3];
			$info['course'] = $myrow[4];
			$info['sex'] = $myrow[5];
			$info['prof']= $myrow[6];
			$info['sub']= $myrow[7];
			$info['datepay']= $myrow[8];
			$info['paystat']= $myrow[9];
			
	
	
	return $info;
}




function get_students(){
	
	$tbl = "student";
	
	include "config.jw.php";
	
	$conn = mysqli_connect($host, $user, $pass, $db);
	
	
	if( mysqli_connect_errno($conn) ){
		echo "Unable to connect to DB server.";
	}
	
	
	
	$sql = "SELECT * FROM $tbl";
	
	
	
	$result = mysqli_query($conn, $sql);
	
	
	
	if( $myrow=mysqli_fetch_array($result) ){
		
		$students = array();
		do{
			
			$info = array();
			$info['id'] = $myrow['idno'];
			$info['name'] = $myrow['lname'].', '.$myrow['fname'].' '.$myrow['mi'];
			$info['course'] = $myrow['course'];
			$info['sex'] = $myrow['sex'];
			$info['prof']= $myrow['professor'];
			$info['sub']= $myrow['subject'];
			$info['datepay']= $myrow['datepay'];
			$info['paystat']= $myrow['paystat'];
			$info['memstat']= $myrow['memstat'];
			$info['memsy']= $myrow['memsy'];
			
			$students[] = $info;		
			
		}while($myrow=mysqli_fetch_array($result));
		
	}else{
		$students = '';
	}		
	return $students;
}



function declinemem($idd){
	$tbl = "student";
	
	include "config.jw.php";
	
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "UPDATE student SET  datepay= '00-00-0000',paystat= 'NOT PAID' ,memstat= 'NOT MEMBER',memsy= '0000-0000' Where idno = '".$idd."' ";

if ($conn->query($sql) === TRUE) {
  
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
}

function edit_student($sql){
	$tbl = "student";
	
	include "config.jw.php";
	
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



if ($conn->query($sql) === TRUE) {
	include "views/edit_membersuc.php";
  //  echo "Record updated successfully";
} else {
	include "views/edit_member.php";
	echo'
	<script>
	alert("Duplicate Record");
	</script>
	';
    //echo "Error updating record: " . $conn->error;
}

$conn->close();
}

function payment($idd){
	$tbl = "student";
	include "config.jw.php";
	
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$d= date("m-d-Y");
$dd= date("Y");
$pyr=$dd-1;
$nyr=$dd+1;
if(date("m")=="01" || date("m")=="02" || date("m")=="03"){
	$sy=$pyr."-".$dd;	
}
else{
	$sy=$dd."-".$nyr;	
}
$sql = "UPDATE student SET datepay='".$d."' , paystat='PAID',memstat='MEMBER',memsy='".$sy."' WHERE idno='$idd'";

if ($conn->query($sql) === TRUE) {
  
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
}


?>