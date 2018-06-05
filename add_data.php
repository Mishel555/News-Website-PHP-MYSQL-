<?php 
$notext = false;
if (!empty($_GET['notext'])) {
    $notext = true;
}
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./resource/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./resource/css/bootstrap-grid.min.css">

    <link rel="stylesheet" type="text/css" href="./resource/css/style.css">

    <script type="text/javascript" src="./resource/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="./resource/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link text-info" href="main_page_html.php">Main</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-info" href="mypage.php">My Page</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-danger" href="add_data.php">Add</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-info" href="exit.php">EXIT</a>
    </li>
  </ul>
</nav>
<div class="container-fluid log-in d-flex justify-content-center" style="height: 100%">
    <div class="col-md-3 align-self-center">
        <label class="h2 text-info">ADDING PART</label>
        <form action="add_data_in_db.php" method="post">
            <div class="form-group">
                <div id="title">
                         <?php
                         if ($notext) {
                            echo "Please Fill All Fields <br>";  
                            }

                         echo "Title";
                         
                         ?>

                </div>
                <input type="text" class="form-control" name="title" placeholder="title"/>
            </div>
            <div class="form-group">
                <div id="author">
                    <?php 
                        echo "author";
                   ?>
                </div>
                <input type="text" class="form-control" name="author" placeholder="author">
            </div>
            <div class="form-group">
                <textarea cols="40" rows="4" name='news'></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">ADD</button>

        </form>
    </div>
</div>
</body>
</html>