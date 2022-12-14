<?php
    include '../Model/db_config.php';

	$name="";
	$err_name="";
	$fname="";
	$err_fname="";
	$mname="";
	$err_mname="";
	$gender="";
	$err_gender="";
	$age="";
	$err_age="";
	$bg="";
	$err_bg="";
	$brn="";
	$err_brn="";
	$dob="";
	$err_dob="";
	$pass="";
	$err_pass="";
	$hasError=false;
	
	function numCharCheck($pas){
	    for ($i = 0; $i <= strlen($pas)-1; $i++) {
            if(is_numeric($pas[$i]))  {
                return true;
            }
        }
		return false;
	}
	function specialCharCheck($pas){
	    for ($i = 0; $i <= strlen($pas)-1; $i++) {
            if(($pas[$i]) == "#" or ($pas[$i])== "*")  {
                return true;
            }
        }
		return false;
	}
	function lowerCharCheck($pas){
	    for ($i = 0; $i <= strlen($pas)-1; $i++) {
            if(ctype_lower($pas[$i]))  {
                return true;
            }
        }
		return false;
	}
	function upperCharCheck($pas){
	    for ($i = 0; $i <= strlen($pas)-1; $i++) {
            if(ctype_upper($pas[$i]))  {
                return true;
            }
        }
		return false;
	}
	
    if(isset($_POST["Signup"])){
		
		
		
	if(empty($_POST["name"])){
		$err_name="Name Required*";
		$hasError = true;
	}
	else{
		$name=htmlspecialchars($_POST["name"]);
	}

	if(empty($_POST["fname"])){
		$err_fname="Father's name required*";
		$hasError = true;
	}
	else{
		$fname=htmlspecialchars($_POST["fname"]);
	}
	

	if(empty($_POST["mname"])){
		$err_mname=" Mother's name required*";
		$hasError = true;
	}
	else{
		$mname=htmlspecialchars($_POST["mname"]);
	}


	if(empty($_POST["gender"])){
		$err_gender="Gender Required*";
		$hasError = true;
	}
	else{
		$gender = htmlspecialchars($_POST["gender"]);
	}

	if(empty($_POST["brn"])){
		$err_brn="Brith Registration Number Required*";
		$hasError = true;
	}
	else{
		$brn=htmlspecialchars($_POST["brn"]);
	}


	if(empty($_POST["bg"])){
		$err_bg="Blood group Required*";
		$hasError = true;
	}
	else{
		$bg=htmlspecialchars($_POST["bg"]);
	}
	

	if(empty($_POST["dob"])){
		$err_dob="Birthdate Required*";
		$hasError = true;
	}
	else{
		$dob=htmlspecialchars($_POST["dob"]);
	}

	if(empty($_POST["pass"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		else if(strlen($_POST["pass"]) <=5){
			$err_pass="Password must be atleast 6 charecter";
			$hasError = true;
		}
		else{
			echo $_POST["pass"];
				$pass=$_POST["pass"];
		}
		
		
	if(!$hasError){
		
		 //echo $name."<br>";
		 //echo $_POST["fname"]."<br/>";
		 //echo $_POST["mname"]."<br/>";
		 //echo $_POST["gender"]."<br/>";
		 //echo $_POST["bg"]."<br/>";


		$query = "INSERT INTO user ( name,father_name, mother_name, dob, birth_registration, gender,bg,password ) VALUES ('$name','$fname', '$mname','$dob','$brn','$gender','$bg','$pass')";
		if(execute($query)){
			header("Location:registration.php");
			
		}
		
	}	
	}	

?>
	