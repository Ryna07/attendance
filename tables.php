<?php 
session_start();
include 'db_conn.php';
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Admin Dashboard</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/logo2-nfc.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>



<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="assets/img/logo2-nfc.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="admin-profile.php">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="tables.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Tables</span>
              </a>
            </li>

           <li class="nav-item">
              <a class="nav-link" href="admin-alldata.php">
                <i class="ni ni-bullet-list-67 text-pink"></i>
                <span class="nav-link-text">All data</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="admin-register.php">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Register Admin</span>
              </a>
            </li>
          <!-- Divider -->
        </div>
      </div>
    </div>
  </nav>

  <!-- Main content -->
  <div class="main-content" id="panel">
    
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
         
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" name="search_text" id="search_text" placeholder="Search by NFC ID or Name"class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>

          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a></a>
            </li>
          </ul>

          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="assets/img/name.PNG">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION['name']; ?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="admin-profile.php" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="logout.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->

    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">tables</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--6">

      <div class="row ">
        <div class="col">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Employee Data</h3>
                </div>
              </div>
            </div>
            
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center  table-flush ">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NFC-ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>

                <tbody>
                <?php
                  $count=1;
                  include 'db_conn.php'; // Using database connection file here
                  $records = mysqli_query($conn,"SELECT * from employee"); // fetch data from database

                  while($data = mysqli_fetch_array($records)) 
                { ?>
                      <tr>
                        <th scope="row"><?php echo $data['ID']; ?></th>
                        <th scope="row"><?php echo $data['nfc']; ?></th>
                        <td><?php echo $data['username']; ?></td>
                        <td><?php echo $data['phone']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                      
                        <td>
                          <a name="edit" href="edit.php?ID=<?php echo $data['ID']; ?>" class="btn btn-sm btn-neutral">EDIT</a>
                          
                        </td>
                        <td >
                          <a name="delete" href="delete.php?ID=<?php echo $data['ID']; ?>" class="btn btn-sm btn-neutral">DELETE</a>
                        </td>

                     </tr>
                  <?php $count++; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

     
      </div>

       <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Punch in Data</h3>
                </div>
              </div>
            </div>
            <div class="table-responsive">

      <!-- punch in table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">NFC-ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Time in</th>
                    
                  </tr>
                </thead>

                <tbody>
                <?php
                  $count=1;
                  $date = date("Y-m-d");
                  include 'db_conn.php'; // Using database connection file here
                  $records = mysqli_query($conn,"SELECT * from employee, punch_in  WHERE employee.nfc = punch_in.nfc && day = '$date'"); // fetch data from database

                  while($data = mysqli_fetch_array($records)) 
                { ?>
                      <tr>
                        <th scope="row"><?php echo $data['nfc']; ?></th>
                        <td ><?php echo $data['username']; ?></td>
                        <td ><?php echo $data['time_in']; ?></td>

                     </tr>
                  <?php $count++; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

             <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Punch out Data</h3>
                </div>
              </div>
            </div>

            <div class="table-responsive">

      <!-- punch in table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">NFC-ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Time out</th>
                    
                  </tr>
                </thead>

                <tbody>
                <?php
                  $count=1;
                  $date = date("Y-m-d");
                  include 'db_conn.php'; // Using database connection file here
                  $records = mysqli_query($conn,"SELECT * from employee, punch_out  WHERE employee.nfc = punch_out.nfc && day = '$date'"); // fetch data from database

                  while($data = mysqli_fetch_array($records)) 
                { ?>
                      <tr>
                        
                        <th scope="row"><?php echo $data['nfc']; ?></th>
                        <td ><?php echo $data['username']; ?></td>
                        <td ><?php echo $data['time_out']; ?></td>

                     </tr>
                  <?php $count++; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

     
      </div>

      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="" class="font-weight-bold ml-1" target="_blank">Creat by RYNa</a>
            </div>
          </div>
        </div>
      </footer>

    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>

</body>

</html>