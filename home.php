<?php 
session_start();
date_default_timezone_set("Asia/Singapore");
include 'db_conn.php';

$id=$_SESSION['ID'];

$query = "SELECT * from employee where ID='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Home</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/logo2-nfc.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
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
              <a class="nav-link" href="user_data.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Your Data</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home.php">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>

          <!-- Navigation -->

        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">

    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom">
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
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
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
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
           
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="assets/img/name.png">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION['username']; ?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="home.php" class="dropdown-item">
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
    <div class="header pb-5 d-flex align-items-center" style="min-height: 400px; background-image: url(assets/img/theme/profile-back2.jpg); background-size: cover; background-position: center top;">
      
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-12 col-md-5">
            <h1 class="display-1 text-white">Hello <?php echo $_SESSION['username']; ?> !</h1>
            <p class="text-white mt-1 mb-4">welcome to your profile</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
            <img src="assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
            
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  
                </div>
              </div>

              <div class="text-center">
                <h5 class="h3">
                  <?php echo $_SESSION['username']; ?><span class="font-weight-light"></span>
                </h5>

                <h5 class="h3">
                  DATE<span class="font-weight-light"></span>
                </h5>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i><?php echo date("Y/m/d") ?>
                </div>
                
                <div class="h3">
                  TIME<i class="ni business_briefcase-24 mr-2"></i>
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i><?php echo date("h:i:sa") ?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- profile table -->
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit profile </h3>
                </div>

              </div>
            </div>
            <div class="card-body">

          <?php
          $status = "";
          if(isset($_POST['submit']))
          {
            $name = $_POST['username'];
            $email= $_POST['email'];
            $phone = $_POST['phone'];

            $update="UPDATE employee SET username='".$name."', phone='".$phone."', email='".$email."' WHERE ID='".$id."'";

            mysqli_query($conn, $update) or die(mysqli_error());
              $status = "Record Updated Successfully. </br></br>
                  <a href='home.php'>View Updated Record</a>";
            echo '<p style="color:#FF0000;">'.$status.'</p>';
          }else {
        ?>
              <form role="form" action="" method="post" >

                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $row['username'];?>">
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">NFC ID</label>
                        <input disabled type="text" name="nfc" class="form-control" placeholder="NFC ID" value="<?php echo $row['nfc'];?>">
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $row['email'];?>">
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-phone">Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="phone" value="<?php echo $row['phone'];?>">
                      </div>
                    </div>                  

                  </div>
                <div class="col-15 text-right">
                  <button type="submit" name="submit" value="Update" class="btn btn-sm btn-primary">UPDATE</button>
                </a>
                </div>                
       
              </form>
             <?php } ?>           
            </div>
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

  
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
<?php 

 ?>