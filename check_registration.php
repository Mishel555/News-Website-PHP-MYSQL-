<?php
include_once 'db.php';
session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $email = $_POST['email'];

    $sql = "
     SELECT `user`.`id`,`user`.`username`, `user`.`password`
     FROM `user` 
     WHERE `username`= '$username' ";
    $result = mysqli_query($conn,$sql);
if(empty($username)||empty($password)||empty($repassword)|| empty($firstname) || empty($lastname) || empty($age) || empty($email)){
    header('Location:registration_html.php?errall=1');
}else{
    if ($result->num_rows > 0) {
    header('Location:registration_html.php?userdublicate=1');
}else {
    if ($password === $repassword) {
    $sql_new_user = "INSERT INTO user (id, username, password, firstname, lastname, age, email) VALUES ('', '$username' , '$password',  '$firstname', '$lastname', '$age', '$email')";
    if (mysqli_query($conn,$sql_new_user)) {
        echo "its ok";
        header('Location:login_html.php');
    }else{
        echo 'its error';
    }
    }else{
        header('Location:registration_html.php?encorrectpwd=1');
    }
}

}
// stexcel nor baza user_details-firstname lastname email age 

?>
