<?php 
include_once 'db.php';
$removed_item_id = $_POST['removed_item_id'];
$sql_remove_item = "DELETE 
					FROM `news`
					WHERE `news`.`id`='$removed_item_id'";
$sql_remove_result = mysqli_query($conn,$sql_remove_item);
if($sql_remove_result){
	header('Location:admin_notifications.php');
}
 ?>}
