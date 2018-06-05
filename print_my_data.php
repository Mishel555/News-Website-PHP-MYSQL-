<?php 
include_once 'db.php';
session_start();
$user_id=$_SESSION['user_id'];
$sql_get_mynews= "SELECT *
FROM `news`
WHERE `news`.`user_id`='$user_id' && `news`.`status`='1'";
$mynews_result =mysqli_query($conn,$sql_get_mynews);
if($mynews_result->num_rows >0){
	// inch kkatarvi stex $row = $mynews_result->fetch_assoc?
	while($row = $mynews_result->fetch_assoc()){
		$_SESSION['title']=$row['title'];
		$_SESSION['author']=$row['author'];
		$_SESSION['news']=$row['news'];
		echo "<div style='text-align:center'>
				 <h1 class='text-info'>$row[title]</h1>
				 <h2 class='text-danger'>$row[author]</h2>
				 <h4>$row[news]</h4>
			<div class='btn-group'>
				<form action='user_edit_html.php' method='post'>
				<button name='edit_id' class='btn  btn-info ' value='$row[id]'> EDIT </button>
				</form>
				<form action='user_delete_db.php' method='post'>
				<button name='delete_id' class='btn  btn-info' value='$row[id]'>DELETE</button>
				</form>
			</div>
			</div>";

	}
}
?>