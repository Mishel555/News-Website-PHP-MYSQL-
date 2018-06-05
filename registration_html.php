<?php
$errall=false;
    if(!empty($_GET['errall'])){
        $errall = true;
    }
$userdublicate = false;
    if(!empty($_GET['userdublicate'])){
        $userdublicate = true;
    }
$encorrectpwd = false;
    if(!empty($_GET['encorrectpwd'])){
        $encorrectpwd = true;
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
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link text-info" href="index.php">#ToPNeWs</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-info" href="login_html.php">LOGIN</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-danger" href="registration_html.php">REGISTRATION</a>
    </li>
  </ul>
</nav>
<div class="container-fluid log-in d-flex justify-content-center" style="height: 100%">
    <div class="col-md-3 align-self-center">
        <label class="h2 text-info">LogIn</label>
        <form action="check_registration.php" method="post">
            <div class="form-group">
                <div id="username">
                         <?php
                         if ($errall) {
                            echo "Please Fill All Fields <br>";  
                            }                       
                         if($userdublicate){
                            echo "username already exists";
          
                         }else {
                             echo "Username:";
                         }
                         ?>

                </div>
                <input type="text" class="form-control" name="username" placeholder="Username"/>
            </div>
            <div class="form-group">
                <div id="pass">
                    <?php 
                        echo "Password:";
                   ?>
                </div>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <div id="repass">
                    <?php 
                    if($encorrectpwd){
                    echo "Encorrect Password";
            
                    }else {
                        echo "Repeat password:";
                    }
                   ?>
                </div>
                <input type="password" class="form-control" name="repassword" placeholder="Password">
            </div>
            <div class="form-group">
                <div id="firstname">
                    Firstname
                </div>
                <input type="text" class="form-control" name="firstname" placeholder="firstname">
            </div>
            <div class="form-group">
                <div id="lastname">
                    lastname
                </div>
                <input type="text" class="form-control" name="lastname" placeholder="lastname">
            </div>
            <div class="form-group">
                <div id="age">
                    age
                </div>
                <input type="number" class="form-control" name="age" placeholder="age">
            </div>
            <div class="form-group">
                <div id="email">
                    email
                </div>
                <input type="email" class="form-control" name="email" placeholder="email">
            </div>
            <label for="remember">Remember Me</label>
            <input type="checkbox" name="remember" id="remember">
            <br>
            <button type="submit" class="btn btn-primary">REGISTRATION</button>
            <!-- stexcel a href registration.php vortex mi angamel piti grvi username u password heto tani depi checkagain.php u stugel ete ka et 2 passwordnernel tesnel hamapatasxan en ardyok irar -->
        </form>
    </div>
</div>
</body>
</html> 