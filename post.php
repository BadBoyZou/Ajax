<?php
	
	header('content-type:text/html;charset="utf-8"');
	
	/*
	$user = $_GET['user'];
	$pwd = $_GET['pwd'];
	echo "您的用户名是：{$user}，您的密码是：{$pwd}";
	
	*/
	$user = $_POST['user'];
	$pwd = $_POST['pwd'];
	echo "您的用户名是：{$user}，您的密码是：{$pwd}";
	
	
?>