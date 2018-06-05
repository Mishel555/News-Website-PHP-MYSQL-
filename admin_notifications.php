<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./resource/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./resource/css/bootstrap-grid.min.css">

    <link rel="stylesheet" type="text/css" href="./resource/css/style.css">

    <script type="text/javascript" src="./resource/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="./resource/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link text-info" href="admin_page.php">ADMIN PAGE</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-danger" href="admin_notifications.php">NOTIFICATIONS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-info" href="exit.php">EXIT</a>
    </li>
  </ul>
</nav>
<div>
  <?php 
include_once 'admin_manage.php';

  ?>
</div>
</body>
</html>	