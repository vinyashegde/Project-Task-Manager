<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Add your meta tags and title here -->

  <title>Employee Task Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.theme.min.css">
  <link rel="stylesheet" href="assets/bootstrap-datepicker/css/datepicker.css">
  <link rel="stylesheet" href="assets/bootstrap-datepicker/css/datepicker-custom.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <style>
    /* Custom CSS for increasing the height of the navigation bar */
    .custom-navbar {
      height: 60px; /* Change the height value as per your requirement */
      background-color: #2196F3; /* Modern primary color */
    }

    /* Adjust padding and line-height for navigation items and icons */
    .custom-navbar .navbar-nav > li > a {
      padding: 20px 15px; /* Customize the padding as needed */
      color: #fff; /* White text color */
    }

    .custom-navbar .navbar-nav > li > a .glyphicon {
      font-size: 20px; /* Adjust the icon size as needed */
      margin-left: 10px; /* Add some spacing between text and icon */
    }
    
    /* Modern hover color for navigation items */
    .custom-navbar .navbar-nav > li > a:hover,
    .custom-navbar .navbar-nav > li > a:focus {
      background-color: #0D47A1; /* Slightly darker color on hover */
    }
  </style>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script src="assets/bootstrap-datepicker/js/datepicker-custom.js"></script>
  <script type="text/javascript">
    
    /* delete function confirmation  */
    function check_delete() {
      var check = confirm('Are you sure you want to delete this?');
      if (check) {
        return true;
      } else {
        return false;
      }
    }
  </script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top custom-navbar" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="task-info.php"><span style="color: #fff; font-weight: bold;">Project Task Management</span></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <?php
          $user_role = $_SESSION['user_role'];
          if ($user_role == 1) {
        ?>
        <li <?php if ($page_name == "Task_Info") {echo "class=\"active\"";} ?>>
          <a href="task-info.php">Task Management
            <span class="glyphicon glyphicon-tasks"></span>
          </a>
        </li>
        <!-- <li <?php if ($page_name == "Attendance") {echo "class=\"active\"";} ?>>
          <a href="attendance-info.php">Attendance
            <span class="glyphicon glyphicon-calendar"></span>
          </a>
        </li> -->
        <li <?php if ($page_name == "Admin") {echo "class=\"active\"";} ?>>
          <a href="manage-admin.php">Administration
            <span class="glyphicon glyphicon-user"></span>
          </a>
        </li>
        <li>
          <a href="?logout=logout">Logout
            <span class="glyphicon glyphicon-log-out"></span>
          </a>
        </li>
        <?php 
          } else if ($user_role == 2) {
        ?>
        <li <?php if ($page_name == "Task_Info") {echo "class=\"active\"";} ?>>
          <a href="task-info.php">Task Management
            <span class="glyphicon glyphicon-tasks"></span>
          </a>
        </li>
        <li <?php if ($page_name == "Attendance") {echo "class=\"active\"";} ?>>
          <a href="attendance-info.php">Attendance
            <span class="glyphicon glyphicon-calendar"></span>
          </a>
        </li>
        <li>
          <a href="?logout=logout">Logout
            <span class="glyphicon glyphicon-log-out"></span>
          </a>
        </li>
        <?php
          } else {
            header('Location: index.php');
          }
        ?>
      </ul>
    </div>
  </div>
</nav>
<br><br>

<div class="container">
  <!-- Content goes here -->
</div>

</body>
</html>
