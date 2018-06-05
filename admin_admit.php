<?php 
include_once 'db.php';
$admited_item_id=$_POST['admited_item_id'];
echo $admited_item_id;
$sql_admit_item="UPDATE `news`
				SET `news`.`status`='1'
				WHERE `news`.`id`='$admited_item_id'";
 $admit_item_res=mysqli_query($conn,$sql_admit_item) ;
if ($admit_item_res) {
	header('Location:admin_notifications.php');
}else {
	echo "Error";
}
 ?>