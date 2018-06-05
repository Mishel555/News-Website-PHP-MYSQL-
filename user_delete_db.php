<?php 
include_once 'db.php';
session_start();
$delete_id = $_POST['delete_id'];
$user_id=$_SESSION['user_id'];
$sql_delete_mynews= "DELETE
FROM `news`
WHERE `news`.`user_id`='$user_id' && `news`.`id`='$delete_id'";
$delete_result =mysqli_query($conn,$sql_delete_mynews);
if($delete_result===true){
header('Location:mypage.php');
}else {
	echo "error";
}
 ?>