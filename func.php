<?php
	function getConnection()
	{
		return mysqli_connect("localhost", "root", "", "books_shop");
	}
?>