<?php

$errorusr = false;
$errorpwd = false;
    if(!empty($_GET['eu'])){
        $errorusr = true;
    }
     if(!empty($_GET['ep'])){
        $errorpwd = true;
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
<body >
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link text-info" href="index.php">#ToPNeWs</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-danger" href="login_html.php">LOGIN</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-info" href="registration_html.php">REGISTRATION</a>
    </li>
  </ul>
</nav>
<div class="container-fluid log-in d-flex justify-content-center" style="height: 100%">
    <div class="col-md-3 align-self-center">
        <label class="h2 text-info">LogIn</label>
        <form action="check_login.php" method="post">
            <div class="form-group">
                <div id="username">
                         <?php if( $errorusr){
                    echo "please enter your username";
          
                    }else {
                        echo "Username:";
                    }
                ?>

                </div>
                <input type="text" class="form-control" name="username" placeholder="Username"/>
            </div>
            <div class="form-group">
                <div id="pass">
                    <?php if($errorpwd){
                    echo "please enter your password";
            
                    }else {
                        echo "Password:";
                    }
                   ?>
                </div>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <label for="remember">Remember Me</label>
            <input type="checkbox" name="remember" id="remember">
            <br>
            <button type="submit" class="btn btn-primary">LOGIN</button>
            <a style="display: inline-block;padding: 5px 8px 5px 8px;color:white;font-weight:bold;text-decoration:none;background-color: blue;border-radius: 2px" href='registration_html.php'>REGISTRATION</a>
            <!-- stexcel a href registration.php vortex mi angamel piti grvi username u password heto tani depi checkagain.php u stugel ete ka et 2 passwordnernel tesnel hamapatasxan en ardyok irar -->
        </form>
    </div>
</div>
</body>
</html>	