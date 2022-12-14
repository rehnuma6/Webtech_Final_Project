<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale">
    <title>Admin Dashboard</title>
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
              <button type="button" class="btn btn-primary">Logout</button>
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
            <h5 class="text-muted fw-bold mt-4">Welcome back, Admin!</h5>
          </div>
      </div>
  </div>
</section>

<!-- chart first div start -->
<section class="py-0" id="chart">
  <div class="container-lg">
    <div class="row justify-content-start">

<!-- line chart start -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5>Users Immunization Record</h5>
                    <hr>
                        <div>
                        <canvas id="myChart"></canvas>
                        </div>
                </div>
            </div>
      </div>
<!-- line chart end -->

<!-- pie chart start-->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Immunization by Gender</h5>
                    <hr>
                        <div>
                        <canvas id="myPieChart"></canvas>
                        </div>
                </div>
            </div>
      </div>
<!-- pie chart end -->

  </div>
  </div>
</section>
<!-- chart ends -->

<!-- chart second div start -->
<section class="py-4" id="chart">
    <div class="container-lg">
      <div class="row justify-content-start">
  
  <!-- bar chart start -->
          <div class="col-md-8">
              <div class="card">
                  <div class="card-body">
                      <h5>Users Age Group</h5>
                      <hr>
                          <div>
                          <canvas id="myBarChart"></canvas>
                          </div>
                  </div>
              </div>
        </div>
  <!-- bar chart end -->
  
  <!-- doughnut chart start-->
          <div class="col-md-4">
              <div class="card">
                  <div class="card-body">
                      <h5>User Blood Group</h5>
                      <hr>
                          <div>
                          <canvas id="myDoughnutChart"></canvas>
                          </div>
                  </div>
              </div>
        </div>
  <!-- doughnut chart end -->
  
    </div>
    </div>
  </section>
<!-- chart ends -->


<!-- users table start-->
<section class="py-4" id="usertable">
    <div class="container-lg">
        <div class="row justify-content-start">
    <table class="table">
        <thead class="table-primary">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
			<th scope="col">Birth Registration</th>
            <th scope="col">Blood Group</th>
            <th scope="col">DOB</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark Wein</td>
            <td>Male</td>
			<td>1234567890</td>
            <td>A+</td>
            <td>11/4/2022</td>
            <td><button type="button" class="btn btn-info">View</button> <button type="button" class="btn btn-danger">Delete</button></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob Black</td>
            <td>Male</td>
			<td>1234567890</td>
            <td>O+</td>
            <td>30/6/2022</td>
            <td><button type="button" class="btn btn-info">View</button> <button type="button" class="btn btn-danger">Delete</button></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry James</td>
            <td>Male</td>
			<td>1234567890</td>
            <td>AB-</td>
            <td>7/8/2022</td>
            <td><button type="button" class="btn btn-info">View</button> <button type="button" class="btn btn-danger">Delete</button></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Sally Anderson</td>
            <td>Female</td>
			<td>1234567890</td>
            <td>B+</td>
            <td>12/11/2022</td>
            <td><button type="button" class="btn btn-info">View</button> <button type="button" class="btn btn-danger">Delete</button></td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Alison Smith</td>
            <td>Female</td>
			<td>1234567890</td>
            <td>O-</td>
            <td>6/5/2022</td>
            <td><button type="button" class="btn btn-info">View</button> <button type="button" class="btn btn-danger">Delete</button></td>
          </tr>
        </tbody>
      </table>
    </div>
    </div>
</section>
<!-- users table end -->
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
            data: [100, 200, 400, 0, 200, 150, 370, 120, 230],
            borderWidth: 1
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

      const pie = document.getElementById('myPieChart');
      
      new Chart(pie, {
          // the chart we want to create
        type: 'pie',

      //   data for our dataset
        data: {
          labels: ['Male','Female'],
          datasets: [{
            label: 'vaccine taken',
            data: [300,500],
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

      const bar = document.getElementById('myBarChart');
      
      new Chart(bar, {
          // the chart we want to create
        type: 'bar',

      //   data for our dataset
        data: {
          labels: ['Infant','2 months', '4 months', '6 months', '8 months', '10 months', '12 months', '14 months', '16 months'],
          datasets: [{
            label: '# of vaccinated users',
            data: [30, 50, 70, 130, 240, 100, 340, 50, 110, 250],
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

      const doughnut = document.getElementById('myDoughnutChart');
      
      new Chart(doughnut, {
          // the chart we want to create
        type: 'doughnut',

      //   data for our dataset
        data: {
          labels: ['A+','A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-'],
          datasets: [{
            label: '# of vaccinated users',
            data: [30, 50, 70, 138, 270, 110, 310, 250],
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