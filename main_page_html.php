<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./resource/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./resource/css/bootstrap-grid.min.css">

    <link rel="stylesheet" type="text/css" href="./resource/css/style.css">

    <script type="text/javascript" src="./resource/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="./resource/js/bootstrap.min.js"></script>
</head>
<body class="">
<nav class="navbar navbar-expand-sm bg-dark navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link text-danger" href="main_page_html.php">Main</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-info" href="mypage.php">My Page</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-info" href="add_data.php">Add</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-info" href="exit.php">EXIT</a>
    </li>
  </ul>
</nav>
<div>
  <?php 
include_once 'print_main_data.php';

  ?>
</div>
</body>
</html>	