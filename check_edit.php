<?php
include_once 'db.php';
session_start();
$edit_id = $_POST['edit_id'];
$_SESSION['edit_id']=$edit_id;
$user_id=$_SESSION['user_id'];
$sql_get_mynews= "SELECT *
FROM `news`
WHERE `news`.`user_id`='$user_id' && `news`.`id`='$edit_id'";
$mynews_result =mysqli_query($conn,$sql_get_mynews);
if($mynews_result->num_rows >0){
	// inch kkatarvi stex $row = $mynews_result->fetch_assoc?
	while($row = $mynews_result->fetch_assoc()){
		echo "<input type='text' style='width:300px' name='title' value='$row[title]'>";
		echo "<input type='text' style='width:300px' name='author' value='$row[author]'>";
		echo "<input type='text' style='width:300px' name='news' value='$row[news]'>";
		echo "<input type='submit' value='UPDATE'>";
	}
}
?>