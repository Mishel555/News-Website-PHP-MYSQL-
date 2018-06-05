<?php 
include_once 'db.php';
$sql_get_admin_news= "SELECT `news`.`id`,`news`.`author`,`news`.`title`,`news`.`news`,`news`.`status`
				FROM `news`
				WHERE `news`.`status`='-1'";
$admin_news_result =mysqli_query($conn,$sql_get_admin_news);
// $news_array = $news_result->fetch_assoc();
// //   foreach($news_array as $key => $value){
// //   	echo $value.'<br>';
// // }
// print_r($news_array)
if($admin_news_result->num_rows >0){
	while($row = $admin_news_result->fetch_assoc()){
		echo "<div>
			<h1 class='text-info'>$row[author]</h1>
			<h2 class='text-danger'>$row[title]</h2>
			<h4>$row[news]</h4>
			<div class='btn-group'>
				<form action='admin_admit.php' method='post'>
				<button class='btn btn-info' name='admited_item_id' value=$row[id]>ADMIT</button>
				</form>
				<form action='admin_remove.php' method='post'>
				<button class='btn btn-info' name='removed_item_id' value=$row[id]>REMOVE</button>
				</form>
			</div>
			 </div>";
	}
}
?>