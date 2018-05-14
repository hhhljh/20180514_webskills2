<?php
	session_start();
	$db = new PDO("mysql:host=127.0.0.1;dbname=0221;charset=utf8","root","");
	$page = isset($_GET['page']) ? $_GET['page'] : 'client';
	$idx = isset($_GET['idx']) ? $_GET['idx'] : NULL;
	$product = isset($_GET['product']) ? $_GET['product'] : NULL;
	$client = isset($_GET['client']) ? $_GET['client'] : NULL;
	function alert($msg){
		echo "<script>alert('{$msg}')</script>";
	}
	function move($url){
		echo "<script>document.location.replace('{$url}')</script>";
	}
 ?>