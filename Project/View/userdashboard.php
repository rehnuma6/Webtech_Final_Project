
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale">
    <title>User Dashboard</title>
    <!-- CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <script src="https://kit.fontawesome.com/44ffe5a098.js" crossorigin="anonymous"></script>
    <!-- Bootstrap v5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="bg-light">

<!-- navbar start-->
<nav class="navbar navbar-expand-lg bg-white fixed-top shadow-sm px-4">
    <div class="container-lg">
        <img src="img/syringe.png" width="30" height="24" alt="">
        <a class="navbar-brand text-primary fw-bold fs-4" href="#">CVMS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse justify-content-end id=navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Profile</a>
              </li>
              <li class="nav-item">
              <button type="button" class="btn btn-white"><a href="userlogin.php">Logout</a></button>
              </li>
            </ul>
          </div>
    </div>
</nav>
<!-- navbar end-->

<!-- title -->
<section class="py-4" id="userdashboard">
  <div class="container-lg">
      <div class="row align-items-start">
          <div class="col-md-8 mt-4">
            <h5 class="text-muted fw-bold mt-4">Welcome back!</h5>
          </div>
      </div>
  </div>
</section>

<!-- cards start-->
<section class="py-0" id="cards">
  <div class="container-lg">
    <div class="row justify-content-start">
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <img src="img/document.png" width="48px" alt="...">
            <h5 class="card-title"><a href="https://www.cdc.gov/vaccines/schedules/hcp/imz/child-adolescent.html">General Vaccine Information</a></h5>
			
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card ">
          <div class="card-body">
            <img src="img/vaccination.png" width="48px" alt="">
            <h5 class="card-title"><a href="vaccineform.html">Enter Vaccine Information</a></h5>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <img src="img/storage.png" width="48px" alt="">
            <h5 class="card-title">Download Vaccine Certificate</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <img src="img/document.png" width="48px" alt="...">
            <h5 class="card-title">Upcoming Vaccine Dose Reminder</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- cards end-->


<!-- chart start -->
<section class="py-4" id="chart">
  <div class="container-lg">
    <div class="row justify-content-start">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
              <h5>Your Immunization Record</h5>
              <hr>
              <div>
                  <canvas id="myChart"></canvas>
              </div>
          </div>
        </div>
      </div>

<!-- vaccine table start-->
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
              <h5>Recommended Immunization</h5>
              <hr>
              <div>
                <ol class="list-group list-group-numbered">
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">Hepatitis B (HepB)</div>
                      Birth, 1-2 months, 6-15 months
                    </div>
                    <span class="badge bg-primary rounded-pill">3</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">Rotavirus (RV)</div>
                      2 months, 4 months
                    </div>
                    <span class="badge bg-primary rounded-pill">2</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">Diphtheria, tetanus, & acellular pertussis (DTaP)</div>
                      2 months, 4 months, 6 months, 15 months
                    </div>
                    <span class="badge bg-primary rounded-pill">4</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">Haemophilus influenzae type b (Hib)</div>
                      2 months, 4 months, 12-15 months
                    </div>
                    <span class="badge bg-primary rounded-pill">3</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">Pneumococcal conjugate (PCV13)</div>
                      2 months, 4 months, 6 months, 12-15 months
                    </div>
                    <span class="badge bg-primary rounded-pill">4</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">Inactivated poliovirus (IPV)</div>
                      2 months, 4 months, 6-15 months
                    </div>
                    <span class="badge bg-primary rounded-pill">3</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">Measles, mumps, rubella (MMR)</div>
                      12-15 months
                    </div>
                    <span class="badge bg-primary rounded-pill">1</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">Varicella (VAR)</div>
                      12-15 months 
                    </div>
                    <span class="badge bg-primary rounded-pill">4</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">Hepatitis A</div>
                      12-15 months
                    </div>
                    <span class="badge bg-primary rounded-pill">2</span>
                  </li>
                </ol>
              </div>
        </div>
      </div>
      </div>
    <!-- vaccine table end -->
  </div>
</section>
<!-- chart ends -->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const ctx = document.getElementById('myChart');
      
      new Chart(ctx, {
          // the chart we want to create
        type: 'line',

      //   data for our dataset
        data: {
          labels: ['HepB', 'RV', 'DTaP', 'Hib', 'PCV13', 'IPV', 'MMR', 'Varicella','HepA'],
          datasets: [{
            label: 'vaccine taken',
            data: [1, 2, 4, 0, 2, 1, 3, 1, 2],
            borderWidth: 3
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
</script>
</body>