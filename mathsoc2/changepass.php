<?php
	//changepass controller
	if(isset($_SESSION['user'])){
		unset($_SESSION['notmatch']);
		unset($_SESSION['opnotmatch']);
		include "models/officer_model.php";
		
		//echo 'bruh?';
		if(isset($_POST['oldpass']) && isset($_POST['newpass']) && isset($_POST['confirmpass'])){
			$op = $_POST['oldpass'];
			$np = $_POST['newpass'];
			$cp = $_POST['confirmpass'];
			//echo 'bruuh';
			$idnum = $_SESSION['user'];
			$encop = javaMd5(str_split($op,1));
			if(isEqualsOldPass($idnum,$encop)){
				
				unset($_SESSION['opnotmatch']);
				//echo 'bruuuuuh';
				if($np == $cp){
					//echo 'bruuuuuha';
					$encNP = javaMd5(str_split($np,1));
					$sql="UPDATE officers SET password='$encNP' WHERE studID='$idnum'";
					edit_officer($sql);
					echo '<script>alert("New Password Saved!");</script>';
					include "views/changepass.php";
					
				}
				else{
				$_SESSION['notmatch'] = "Confirm password match new password field!";           	
				include "views/changepass.php";
				die();
				}
			}
			else{
				$_SESSION['opnotmatch'] = "Doesn't match current password!";           	
				include "views/changepass.php";
				die();
			}	
		}
		else{
			include "views/changepass.php";
			//echo 'BRUH!';
		}
	}
	else{
		header("Location: login.php");
		die();
	}
?>