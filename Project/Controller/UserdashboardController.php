<?php
	session_start();
	require '../Model/db_config.php';
	$name="";
	$uname="";
	$email="";
	$phone= "";
	$pass="";
	$empty_err="";
	
	$hasError=false;
	
	
	$brn = $_SESSION["brn"];
	$query="select * from user where birth_registration=$brn";
	$user = get($query);
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"]) and empty($_POST["fname"]) and empty($_POST["email"]) and empty($_POST["phone"]) 
			and empty($_POST["address"]) and empty($_POST["nid"]) and !isset($_POST["gender"]) and !isset($_POST["bg"]))
		
		{
			$empty_err="Nothing is entered";
			$hasError = true;
		}
		else{
			$name=htmlspecialchars($_POST["name"]);
			$uname=htmlspecialchars($_POST["username"]);
			$email=htmlspecialchars($_POST["email"]);
			$phone=htmlspecialchars($_POST["phone"]);
			$gndr=htmlspecialchars($_POST["gender"]);
			$bG=htmlspecialchars($_POST["bg"]);
		}
	
		
		if(!$hasError){
			echo $name."<br>";
			echo $_POST["username"]."<br/>";
			echo $_POST["email"]."<br/>";
			echo $_POST["phone"]."<br/>";
			echo $_POST["nid"]."<br/>";
		}
		
		
	}
?>