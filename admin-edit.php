<?php
require('db_conn.php');

$admin_id=$_REQUEST['admin_id'];
$query = "SELECT * from admin where admin_id='".$admin_id."'"; 
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

  <!-- Main content -->
  <div class="main-content" id="panel">
    
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        </div>
      </div>
    </nav>
    <!-- Header -->

    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">

          </div>
        </div>
      </div>
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--6">

    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary border-0">
            <div class="card-header bg-transparent pb-5">
              
            <div class="card-body px-lg-5 py-lg-5">

          <?php
          $status = "";
          if(isset($_POST['new']) && $_POST['new']==1)
          {
            $name =$_REQUEST['name'];            
            $admin_id=$_REQUEST['admin_id'];

            $update="UPDATE admin SET admin_id='".$admin_id."' ,name='".$name."' WHERE admin_id='".$admin_id."'";

            mysqli_query($conn, $update) or die(mysqli_error());
              $status = "Record Updated Successfully. </br></br>
                        <a href='admin-data.php'>View Updated Record</a>";
                  echo '<p style="color:#FF0000;">'.$status.'</p>';
          }else {
        ?>

              <form role="form" action="" method="post">
                <input type="hidden" name="new" value="1" />

                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <input class="form-control" placeholder="Name" name="name" value="<?php echo $row['name'];?>">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <input class="form-control" placeholder="Admin Id" name="admin_id" value="<?php echo $row['admin_id'];?>">
                  </div>
                </div>
                              
                <div class="text-center">
                  <button type="submit" name="submit" value="Update" class="btn btn-primary mt-4">UPDATE</button>
                </div>
              </form>
              <?php } ?>              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2020 <a class="font-weight-bold ml-1" target="_blank">Creat by RYNa</a>
          </div>
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

