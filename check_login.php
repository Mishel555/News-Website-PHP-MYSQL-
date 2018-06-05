<?php
include_once 'db.php';
session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "
	 SELECT `user`.`id`,`user`.`username`, `user`.`password`
	 FROM `user` 
	 WHERE `username`= '$username' ";
	$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
    echo '<pre>';
    $row = $result->fetch_assoc();
    if($password=='admin'){
    	header('Location:admin_page.php');
    	
    }else if($row['password']==$password) {
    	$_SESSION['user_id']=$row['id'];
    	$_SESSION['username']=$row['username'];
    	header('Location:check_main.php');
    }else{
    	header('Location:login_html.php?ep="1"');
    }
} else {
    	header('Location:login_html.php?eu="1"');
}


	// if (array_key_exists($username , $login_user)){
		
	// 	if($login_user[$username] == $password){
			
	// 		header("Location:main.php" );
	// 		$_SESSION['username']=$username;
	// 		$_SESSION['remember']=$_POST['remember'];
	// 	}else {
		
	// 		header("Location:index.php?ep=1");
	// 	}
	// } else {
	
	// 	header("Location:index.php?eu=1");
	// }

?>