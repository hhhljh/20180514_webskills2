<?php
	include_once("./config/config.php");
	include_once("./page/header.php");
	if (isset($_POST['action'])) {
		include_once("./page/action.php");
		exit; 
	}
	include_once("./page/{$page}.php");
?>