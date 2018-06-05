<?php 
include_once 'db.php';
session_start();
$author = $_POST['author'];
$title = $_POST['title'];
$news = $_POST['news'];
$user_id = $_SESSION['user_id'];
if (empty($author) && empty($title) && empty($news) ) {
	header('Location:add_data.php?notext=1');
	exit();
}
$sql_add_news = "INSERT INTO   news (id,user_id,author,title,news,status)VALUES('','$user_id','$author','$title','$news','-1')";
    if (mysqli_query($conn,$sql_add_news)) {
        header('Location:main_page_html.php');
    }else{
        echo 'its error';
    }

?>