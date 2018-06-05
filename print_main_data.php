<?php 
include_once 'db.php';
$sql_get_news= "SELECT `news`.`author`,`news`.`title`,`news`.`news`
				FROM `news`
				WHERE `news`.`status`='1'";
$news_result =mysqli_query($conn,$sql_get_news);
// $news_array = $news_result->fetch_assoc();
// //   foreach($news_array as $key => $value){
// //   	echo $value.'<br>';
// // }
// print_r($news_array)
if(!$news_result){
	echo "<h1>No Articles Edit Yet</h1>";
}else {
	if($news_result->num_rows >0){
	while($row = $news_result->fetch_assoc()){
		// foreach ($row as $key => $value) {
		// 	echo $value.'<br>';
		// }
		echo "<div style='text-align:center'>
				<h1 class='text-info'>$row[author]</h1>
				<h2 class='text-danger'>$row[title]</h2>
				<h4>$row[news]</h4>
			</div>";
	}
}	
}

?>