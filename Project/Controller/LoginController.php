<?php
	session_start();
    include '../Model/db_config.php';
    $brn="";
    $err_brn="";
    $pass="";
    $err_pass="";
	$err_db="";
	$hasError = false;

	if(isset($_POST["login"])){
		
		if(empty($_POST["brn"])){
		    $err_brn = "*BRN Requird";
			$hasError = true;
	    }
		else{
		    $brn = $_POST["brn"];
	    }
		if(empty($_POST["pass"])){
		    $err_pass = "*Password Requird";
			$hasError = true;
	    }
		else{
		    $pass = $_POST["pass"];
	    }
		
		if(!$hasError){
			if(authenticateUser($brn,$pass)){
				$_SESSION["brn"] = $brn;
				header("Location:userdashboard.php");
				
				$hasError = true;
;			} else {
				$err_db = "User Invalid";
			}
			
		}
	}
	
	function authenticateUser($brn,$pass){
		$query = "select * from user where birth_registration='$brn' and password='$pass'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
?>