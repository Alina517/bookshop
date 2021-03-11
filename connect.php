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
		if(2 == $_SESSION['status'])
		{
			$isAdmin = true;
		}
		else
		{
			$isAdmin = false;
		}
	}
	else
	{
		$isLogin = false;
	}
?>