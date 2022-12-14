<?php include '../Controller/LoginController.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale">
    <title>Login As User</title>
    <!-- CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <script src="https://kit.fontawesome.com/44ffe5a098.js" crossorigin="anonymous"></script>
    <!-- Bootstrap v5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
        
<body class="min-vh-100 d-flex justify-content-center align-items-center bg-primary" style="--bs-bg-opacity: .10;">

        <!-- admin login start-->
    <div class="userlogin p-5 rounded-3 bg-white shadow-sm" width="360px" height="min-content">
        <img src="img/syringe.png" width="36px" alt="">
        <h1 style="color:blue" class="mb-4"><u>User Login</u></h1>
            <form class="needs-validation" action="#" method="post">
                <div class="form-group mb-2">
                    <label class="form-label">Birth Registration Number</label>
                    <input class="form-control" type="text" id="brn" name="brn" required>
                    
                    <span style="color:red"> <?php echo $err_brn; ?> </span>
                    
                </div>
                <div class="form-group mb-2">
                    <label class="form-label">Password</label>
                    <input class="form-control" type="password" id="pass" name="pass" required>
                    
                        <span style="color:red"> <?php echo $err_pass; ?> </span>
                    
                </div>
                <div class="form-group form-check mb-2">
                    <label class="form-check-label" for="checkbox">Remember me</label>
                    <input class="form-check-input" type="checkbox" id="check" name="check">
                </div>
                <input class="btn btn-primary w-100 mt-2" type="submit" value="Login" name="login">
            </form>
			<div>
				<li><a href="homepage.php">Home</a></li> 	
				<li><a href="registration.php">Registration</a></li>
			</div>
    </div>
    <!-- admin login end-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>