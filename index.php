<?php
require 'authentication.php'; // admin authentication check 

// auth check
if (isset($_SESSION['admin_id'])) {
  $user_id = $_SESSION['admin_id'];
  $user_name = $_SESSION['admin_name'];
  $security_key = $_SESSION['security_key'];
  if ($user_id != NULL && $security_key != NULL) {
    header('Location: task-info.php');
  }
}

if (isset($_POST['login_btn'])) {
  $info = $obj_admin->admin_login_check($_POST);
}

$page_name = "Login";
include("include/login_header.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Employee Task Management System</title>
  <!-- Add your meta tags and other stylesheets here -->

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f0f2f5; /* Modern background color */
    }

    .card {
      margin-top: 30vh;
    }

    .card-title {
      font-weight: bold;
      color: #2196F3; /* Modern primary color */
    }

    .btn-info {
      background-color: #2196F3; /* Modern primary color */
      border: none;
    }

    .btn-info:hover {
      background-color: #0D47A1; /* Slightly darker color on hover */
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card shadow">
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Employee Task Management System</h2>
            <form class="form-custom-login" action="" method="POST">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" name="username" required />
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="admin_password" required />
              </div>
              <?php if (isset($info)) { ?>
                <div class="alert alert-danger"><?php echo $info; ?></div>
              <?php } ?>
              <button type="submit" name="login_btn" class="btn btn-info btn-block">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- Add your scripts here -->

</body>

</html>
