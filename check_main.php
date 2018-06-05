<?php
include_once 'db.php';
session_start();
if (empty($_SESSION['user_id'])) {
	header('Location:login_html.php');
	exit();
}
include_once 'main_page_html.php';



?>
