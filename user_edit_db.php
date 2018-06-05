<?php  
include_once 'db.php';
session_start();
$edit_id = $_SESSION['edit_id'];
$title = $_POST['title'];
$author = $_POST['author'];
$news = $_POST['news'];
$update_sql = "UPDATE `news`
				SET `news`.`title`='$title',`news`.`author`='$author',`news`.`news`='$news',`news`.`status`='-1'
				WHERE `news`.`id`='$edit_id'";
$update_result = mysqli_query($conn,$update_sql);
if ($update_result) {
	header('Location:mypage.php');
}else {
	echo 'error';
}

?>