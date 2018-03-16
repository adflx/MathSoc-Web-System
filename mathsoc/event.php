<?php
//event controller
	if( isset($_GET['request']) && strlen($_GET['request'])>0 ){
	
		switch($_GET['request'])
		{
			case 'new': 
				newevent();
				break;
		
			case 'view': 
				viewevents();
				break;
		
			case 'back':
				dashboard();
				break;
		
			default:
				dashboard();
		}
	}
	
	else if((isset($_GET['rquest']) && strlen($_GET['rquest'])>0) && (isset($_GET['event_num']) && strlen($_GET['event_num']))>0)
	{
		
		switch($_GET['rquest'])
		{
			case 'viewdetails':
				viewevent($_GET['event_num']);
				break;
				
			case 'edit':
				editevents($_GET['event_num']);
				break;
		
			case 'back':
				dashboard();
				break;
			
			default:
			dashboard();
		}
	}

	else
	{
		dashboard();
	}

	
function dashboard()
{
	include "views/events_dashboard.php";
}

function viewevent($event_num){
	include "models/events_model.php";
	$events = get_event($event_num);
	include "views/events_viewdetail.php";
}


function newevent()
{
include "models/events_model.php";
	if( $_SERVER['REQUEST_METHOD']=='POST' )
	{
		$d = $_POST;
		$title = $d['title'];
		$startdate = date_create($d['date']);
		$start = date_format($startdate,"F d, Y");
		$month = date_format($startdate,"m");
		$year = date_format($startdate,"Y");
		if((int)$month<6)
		{
			$par1=(int)$year-1;
			$lass= get_lastnum($par1);
	
			if($lass==0){
					
				$strpar2="001";
			}
			else{
				list($part1, $part2) = explode('-', $lass);
						$par1 = $part1;
						$par2 = (int)$part2+1;
						$strpar2 = (string)$par2;
						if(strlen($strpar2)==1){
							$strpar2="00".$strpar2;
						}
						else if(strlen($strpar2)==2){
							$strpar2="0".$strpar2;
						}
				
				}
		}
		else
		{
			$par1=(int)$year;
			$lass= get_lastnum($year);
	
			if($lass==0){
					
				$strpar2="001";
			}
			else{
				list($part1, $part2) = explode('-', $lass);
						$par1 = $part1;
						$par2 = (int)$part2+1;
						$strpar2 = (string)$par2;
						if(strlen($strpar2)==1){
							$strpar2="00".$strpar2;
						}
						else if(strlen($strpar2)==2){
							$strpar2="0".$strpar2;
						}
				
				}
		}
		$id=$par1."-".$strpar2;
		$enddate = date_create($d['enddate']);
		$end = date_format($enddate,"F d, Y");
		$venue = $d['venue'];
		$descrip = $d['description'];
		$details = $d['details'];
		$today = date("F d, Y");
		if($today<=$startdate) {
			$status="UPCOMING";
		}
		else if($today>$startdate){
			$status = "DONE";
		}
		
		if($startdate>$enddate){
				echo 'Invalid dates';
		}
		else{
				
		$sql = "INSERT INTO events(event_num,project_title,date,enddate,venue,event_description,event_details,status)
				VALUES('$id','$title','$start','$end','$venue','$descrip','$details','$status')";	

		events_add($sql);
		
	//	&& $_FILES['image']['size'] > 0
		}
		
if(isset($_FILES['image']))
{

$fileName = $_FILES['image']['name'];
$tmpName  = $_FILES['image']['tmp_name'];
$fileSize = $_FILES['image']['size'];
$fileType = $_FILES['image']['type'];
print_r($fileSize);
$fp      = fopen($tmpName, 'r');
$imgData =addslashes(file_get_contents($_FILES['image']['tmp_name']));
fclose($fp);



if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}
include 'config.jw.php';

$sql = "INSERT INTO images(event_num,image) ".
"VALUES ('$id','{$imgData}')";
images_add($sql);
mysql_query($sql);// or die('Error, query failed'); 

echo "<br>File $fileName uploaded<br>";
} 
else{
	
}


		include "views/events_add.php";
		
		
	}
	else
	{
		include "views/events_add.php";
	}
}

function viewevents()
{
	
	include "models/events_model.php";
	$events = events_display();
	include "views/events_view.php";
}

function editevents($event_num)
{
	$eve=$event_num;
	include "models/events_model.php";
	$events=get_event($eve);

	if( $_SERVER['REQUEST_METHOD']=='POST' )
		{
			$d = $_POST;
		
			$title = $d['title'];
			$startdate = date_create($d['date']);
			$start = date_format($startdate,"F d, Y");
			$enddate = date_create($d['enddate']);
			$end = date_format($enddate,"F d, Y");
			$venue = $d['venue'];
			$descrip = $d['description'];
			$details = $d['details'];
			$status = $d['status'];
			
			$sql = "UPDATE events SET project_title='$title',date='$start',enddate='$end',venue='$venue',event_description='$descrip',event_details='$details' ,status='$status' WHERE event_num='$event_num'";

			events_edit($sql);
		
			include "views/events_edit.php";
		
		}
		else
		{
		
			$events=get_event($eve);
			include "views/events_edit.php";
		}

}


?>