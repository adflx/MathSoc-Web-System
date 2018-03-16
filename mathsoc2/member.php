<?php
//member controller
session_start();

if(isset($_SESSION['user'])){
if( isset($_GET['request']) && strlen($_GET['request'])>0 ){
	switch($_GET['request']){
	case 'new': 
		newstudent();
		break;
	case 'view': 
		viewstudents();
		break;
		case 'decline':
	declinetudents();
	
	case 'back':
	dashboard();
	break;
	default:

		dashboard();
	}
}
	else if((isset($_GET['rquest']) && strlen($_GET['rquest'])>0) || (isset($_GET['idno']) && strlen($_GET['idno']))>0){
	
	switch($_GET['rquest']){
	
	case 'edit':

		editstudents($_GET['idno']);
		break;
	
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
	}
else{

	dashboard();
	
}
}
else{
	header("Location: login.php");
	die();
}

function dashboard(){

	include "views/member_dashboard.php";
}

function newstudent(){

	
	include "models/member_model.php";
	
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
		$memstat = "NOT MEMBER";
		$memsy = "0000-0000";
		include "config.jw.php";
		
		// if (mysql_num_rows($sid) > 0) {
    // echo "User id exists already.";
    // $user = mysql_fetch_array($checkUserId);
    // print_r($user); // the data returned from the query
// }
		$sql = "INSERT INTO student
				(idno,lname,fname,mi,course,sex,professor,subject,datepay,paystat,memstat,memsy)
				VALUES('$sid','$lname','$fname',
				'$mi','$course','$sex','$prof','$sub','$datepay','$paystat','$memstat','$memsy')";		
		
		
		add_student($sql);
		
		
		
		
	}else{
		
		
		include "views/new_member.php";
	}
}

function viewstudents(){
	
	include "models/member_model.php";
	$students = get_students();

	if( $_SERVER['REQUEST_METHOD']=='POST' ){
		
		$d = $_POST;
	
		
	foreach($d as $id){
		
		declinemem($id);
	}
	
		
		include "views/delete_member.php";
		
		
	}else{
		
		
	include "views/display_members.php";
	}
	
}

function declinestudents(){
	include "models/member_model.php";
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
		$memstat = "NOT MEMBER";
		$memsy = "0000-0000";
		
		$sql = "INSERT INTO student
				(idno,lname,fname,mi,course,sex,professor,subject,datepay,paystat,memstat,memsy)
				VALUES('$sid','$lname','$fname',
				'$mi','$course','$sex','$prof','$sub','$datepay','$paystat','$memstat','$memsy')";		
	
		declinemem($sql);
		
		include "views/new_membersuc.php";
		
		
	}else{
		
		
		include "views/new_member.php";
	}
	include "models/member_model.php";
	print_r($_POST);
	include "views/delete_member.php";
}

function editstudents($idd){
	$id=$idd;
	include "models/member_model.php";
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
	
			if (count($d)==11){
			$datepay="00-00-0000";
			$memstat="NOT MEMBER";
			$sy="0000-0000";
			}
			else{
				$date = date_create($d['datepay']);
			$datepay = date_format($date,"m-d-Y");
				
				$ddy= date("Y");
				$pyr=$ddy-1;
				$nyr=$ddy+1;
				if(date("m")=="01" || date("m")=="02" || date("m")=="03"){
					$sy=$pyr."-".$ddy;	
				}
				else{
					$sy=$ddy."-".$nyr;	
				}
				$memstat="MEMBER";
			}
		$paystat = $d['paystat'];
		
		
	
		
	
		
		$sql = "UPDATE student SET idno='$sid' ,lname='$lname' ,fname='$fname' ,mi='$mi' ,course='$course' ,sex='$sex' ,professor='$prof' ,subject='$sub' ,datepay='$datepay' ,paystat='$paystat',memstat='".$memstat."',memsy='".$sy."' WHERE idno='$idd'";

	
		edit_student($sql);
		
	//	include "views/edit_membersuc.php";
		
	}else{
		
	$student=get_student($id);

	include "views/edit_member.php";
	}

	
}


function confirm($idno){
	
	include "models/member_model.php";
	payment($idno);
	include "views/confirmpay.php";
}
?>