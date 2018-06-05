<?php 
include_once 'login.php';
$username2 = $_POST['username2'];
$password2 = $_POST['password2'];
if (empty($username2) && empty($password2)) {
  header("Location:secndregistr.php?errusr='1'&errpsw='1'");
}
if($_SESSION['username1']===$username2 && $_SESSION['password1'] === $password2) {
	$sqll = "INSERT INTO user (id, username, password) VALUES ('', '$username2' , '$password2')";
	if (mysqli_query($conn, $sqll)) {
		echo "its ok";
	}else{
		echo 'its error';
	}
}
?>