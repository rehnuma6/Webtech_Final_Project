<?php include '../Controller/RegistrationController.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale">
    <title>User Signup</title>
    <!-- CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <script src="https://kit.fontawesome.com/44ffe5a098.js" crossorigin="anonymous"></script>
    <!-- Bootstrap v5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="min-vh-100 d-flex justify-content-center align-items-center bg-primary" style="--bs-bg-opacity: .10;">
    <div class="userlogin p-5 rounded-3 bg-white shadow-sm" width="360px" height="min-content">
        <img src="img/syringe.png" width="36px" alt="">
        <h1 class="mb-4">Create a new account</h1>
        <form class="needs-validation" action="#" method="post">
            <div class="form-group mb-2">
                <label class="form-label" for="name">Name</label>
                <input class="form-control" type="text" id="name" name="name" required>
                
                <span style="color:red"><?php echo $err_name;?></span>
                
            </div>
            <div class="form-group mb-2">
                <label class="form-label" for="brn">Birth Registration</label>
                <input class="form-control" type="text" id="brn" name="brn" required>
                
                <span style="color:red"><?php echo $err_brn;?></span>
                
            </div>
            <div class="form-group mb-2">
                <label class="form-label" for="fname">Father's Name</label>
                <input class="form-control" type="text" id="fname" name="fname" required>
                
				<span style="color:red"><?php echo $err_fname;?></span>
                
            </div>
            <div class="form-group mb-2">
                <label class="form-label" for="mname">Mother's Name</label>
                <input class="form-control" type="text" id="mname" name="mname" required>
                
                <span><?php echo $err_mname;?></span>
                
            </div>
            <div class="form-group mb-2">
                <label class="form-label">Blood Group</label>
                 <input class="form-control" type="text" id="bg" name="bg" required>
                
				<span><?php echo $err_bg;?></span>
                
            </div>
			 <div class="form-group mb-2">
                <label class="form-label">Date of Birth</label>
                 <input class="form-control" type="date" id="dob" name="dob" required>
                
				<span><?php echo $err_dob;?></span>
                
            </div>
            <div class="form-group mb-2">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="male">
                <label class="form-check-label" >
                Male
                </label>

                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="female" checked>
                <label class="form-check-label">
                Female
                </label>
                <div class="invalid-feedback">
                
                </div>
            </div>
            <div class="form-group mb-2">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" id="pass" name="pass" required>
                
				<span><?php echo $err_pass;?></span>
               
            </div>

            <input class="btn btn-primary w-100 mt-2" type="submit" value="Signup" name="Signup">
        </form>
		<div>
				<li><a href="homepage.php">Home</a></li> 	
				<li><a href="userlogin.php">Login As User</a></li>
			</div>
    </div>
<!-- Registration end-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>