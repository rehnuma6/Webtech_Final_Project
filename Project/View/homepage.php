<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale">
    <title>Children Vaccine Management System</title>
    <!-- CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <script src="https://kit.fontawesome.com/44ffe5a098.js" crossorigin="anonymous"></script>
    <!-- Bootstrap v5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="bg-white">

<!-- navbar start-->
<nav class="navbar navbar-expand-lg bg-light fixed-top shadow-sm px-4">
    <div class="container-lg">
        <img src="img/syringe.png" width="30" height="24" alt="">
      <a class="navbar-brand text-primary fw-bold fs-4" href="#">CVMS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#testimonials">Testimonials</a>
          </li>
          <li class="nav-item">
            <!-- <button type="button" class="btn btn-outline-primary mx-2">Login</button> -->
            <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle mx-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Login 
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="userlogin.php">Login as a User</a></li>
                  <li><a class="dropdown-item" href="adminlogin.php">Login as an Admin</a></li>
                </ul>
              </div>
          </li>
          <li>
		  <li><a href="registration.php">Signup</a></li>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- navbar end-->

<!-- home start -->
<section class="home py-4" id="home">
    <div class="container-lg">
        <div class="row bg-white min-vh-100 align-items-center align-contents-center">
            <div class="col-md-6 mt-5 mt-md-0">
                <div class="home-text">
                    <h1 class="text-primary text-uppercase fs-1 fw-bold">Schedule Vaccine for your Child</h1>
                    <p class="mt-4 text-muted">GET YOUR FREE DIGITAL VACCINE RECORD FOR LIFE!
                        The Children Vaccine Management System is your official digital Vaccine Record replacing all paper counterparts 
                        from Birth to Adulthood. One stop solution immunization.
                    </p>
                    <!-- <button type="button" class="btn btn-outline-primary px-3 mt-3">Login</button> -->
                </div>
            </div>
            <div class="col-md-6 mt-5 mt-md-0">
                <img src="img/hero.jpg" width="500px" height="auto" alt="">
            </div>
        </div>
    </div>
</section>
<!-- home end -->

<!-- about start -->
<section class="about py-4" id="about">
    <div class="container-lg py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2 class="fw-bold text-uppercase">About Children Vaccination System</h2>
                    <p class="my-4 text-muted">Children Vaccination System (CVMS) is an official digital vaccine card replacing all paper counterparts in Bangladesh. 
                        Your personal immunization record keeper, a digital record which you can never lose.
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-start">
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <img src="img/timer.png" width="60px" alt="">
                    <h3 class="fs-5 py-2">IMMUNIZATION REMINDERS</h3>
                    <p class="text-muted">Receive reminders 2 weeks before and when a vaccine is due, so you always stay on track.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <img src="img/document.png" width="60px" alt="">
                    <h3 class="fs-5 py-2">VACCINE SCHEDULE</h3>
                    <p class="text-muted">A comprehensive vaccine schedule for children to raise awareness among parents about immunization.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <img src="img/vaccination.png" width="60px" alt="">
                    <h3 class="fs-5 py-2">BIRTH TO ADULTHOOD</h3>
                    <p class="text-muted">A digitally vaccine solution that keeps your records safely stored from birth to adulthood.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <img src="img/ecg-monitor.png" width="60px" alt="">
                    <h3 class="fs-5 py-2">PDF PRINT OUTS</h3>
                    <p class="text-muted">Registered users can easily print a PDF card right from within the system at anytime.
                        Manage your child’s vaccine records safely.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <img src="img/storage.png" width="60px" alt="">
                    <h3 class="fs-5 py-2">HISTORY MIGRATION</h3>
                    <p class="text-muted">Easily migrate your personal immunization history from paper to the system in minutes.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <img src="img/folder.png" width="60px" alt="">
                    <h3 class="fs-5 py-2">DIGITAL VACCINE CARD</h3>
                    <p class="text-muted">Digital vaccine card that is easily accessible globally. It can help with travel 
                    (as some gov require proof of immunization)</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about end -->

<!-- testimonial start -->
<section class="testimonials py-4 bg-light" id="testimonials">
    <div class="container-lg py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2 class="fw-bold text-uppercase">Testimonials</h2>
                    <p class="my-4 text-muted">See what health professionals have to say about us!</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active bg-primary" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" class="bg-primary" aria-label="Slide 2"></button>
                    </div>
                <div class="carousel-inner p-1">
                <!-- testi item start -->
                <div class="tesi-item carousel-item active bg-white shadow-sm rounded p-4 mb-5">
                    <div class="testi-author-info d-flex align-items-center">
                        <img src="img/john.png" style="width: 100px;" class="img-thumbnail rounded-circle" alt="author img">
                        <div class="author ms-3">
                            <h3 class="fs-6 mb-1">Dr. Sam Smith</h3>
                            <p class="text-muted m-0">Pediatric Specialist</p>
                        </div>
                    </div>
                        <p class="text-muted mt-3">
                            CVMS is the first online vaccination system in Bangladesh built to increase children’s 
                            routine vaccines uptake.
                        </p>
                        <div class="rating text-primary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                </div>
                <!-- testi item end -->

                <!-- testi item start -->
                <div class="tesi-item carousel-item bg-white shadow-sm rounded p-4 mb-5">
                    <div class="testi-author-info d-flex align-items-center">
                        <img src="img/david.jpg" style="width: 100px;" class="img-thumbnail rounded-circle" alt="author img">
                        <div class="author ms-3">
                            <h3 class="fs-6 mb-1">Dr. David Jonas</h3>
                            <p class="text-muted m-0">Public Health Professional</p>
                        </div>
                    </div>
                        <p class="text-muted mt-3">
                        This is a great initiative! Hopefully this will raise more awareness amongst the 
                        citizens of Bangladesh about immunizations.
                        </p>
                        <div class="rating text-primary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                </div>
                <!-- testi item end -->
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- testimonial end -->

<!-- footer start -->
<footer class="container-fluid px-4 bg-primary text-white">
    <div class="container-lg">
        <div class="row py-5">
            <div class="col-lg-4 justify-content-start">
                <img src="img/syringe.png" width="36px" alt="">
                <h5>CVMS</h5>
                <p>CVMS provides parents of children up to 18 years of age with reliable information on routine 
                vaccines and supports them to keep their children’s health updated and protected from life-threatening diseases.</p>
            </div>
        
            <div class="col-lg-3">
            </div>
    
            <div class="col-lg-4">
                <h5 class="mt-4 text-uppercase">Contact Us</h5>
                    <p>Email: cvms@vaccine.com</p>
                    <p>Telephone: (922) 3354 2252</p>
                    <p>Address: 1245 Baker Street, Medical E152 95RB</p>
            </div>
        </div>
    </div>

    <div class="row">
        <hr class="text-white">
        <p class="text-center">Copyright © 2022 CVMS | Developed in Dhaka</p>
    </div>
</footer>
<!-- footer end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>