<?php
	require "func.php";
	// Соединямся с БД
	$link = getConnection();
	mysqli_query($link, "SET NAMES 'utf8'");

	$isLogin = false;

	session_start();
	if (isset($_SESSION['id']))
	{
		$isLogin = true;
	}
	else
	{
		$isLogin = false;
	}
?>