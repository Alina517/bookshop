<?php
	function login($link){
        // Вытаскиваем из БД запись, у которой логин равняется введенному
        $query = mysqli_query($link,"SELECT user_id, user_login, user_password FROM users WHERE user_login='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
        $data = mysqli_fetch_assoc($query);

        // Сравниваем пароли
        if($data != null && $data['user_password'] === md5(md5($_POST['password'])))
        {
            // Ставим куки
            $_SESSION["id"] = $data['user_id'];

            // Переадресовываем браузер на страницу проверки нашего скрипта
            header("Location: index.php"); 
        } else {
           header("Location: login_error.php");
        }
	}
	
	session_start();
	
	if ($_SERVER['REQUEST_METHOD'] == "POST"){
    
		include 'func.php';

		////Код для авторизации

		if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['enter']))
		{

			// Соединямся с БД
			$link = getConnection();
			
			login($link);
			
		} 
		
		//Регистрация пользователя
		elseif (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['signup'])){
        $link = getConnection();

			// Вытаскиваем из БД запись, у которой логин равняеться введенному
			$query = mysqli_query($link, "SELECT user_login, user_password FROM users WHERE user_login='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
			$data = mysqli_fetch_assoc($query);	

			if(!$data || $data['user_login'] !== $_POST['login']){
				
				$query_max_id = mysqli_query($link, "SELECT user_id, user_login, user_password FROM users WHERE user_id = 
				(SELECT MAX(user_id) FROM users)");
				$data1 = mysqli_fetch_assoc($query_max_id);
				
				$_id = $data1['user_id'] + 1;
				$_login = mysqli_real_escape_string($link, $_POST['login']);
				$_fio = mysqli_real_escape_string($link, $_POST['fio']);
				$_password = md5(md5($_POST['password']));
				
				if('' === $_login || '' === $_password || '' === $_fio)
				{
					$_SESSION['error'] = 3;
					header("Location: check_in_error.php");
				}
				else {
					$query = mysqli_query($link, "INSERT INTO users (user_id, user_login, user_password, user_name) VALUES ('$_id', '$_login', '$_password', '$_fio')");
					if ($query){
						login($link);
					} else {
						$_SESSION['error'] = 1;
						header("Location: check_in_error.php");
						//echo '<h1>Ошибка при регистрации</h1>';
					}
				}
			} else {
				$_SESSION['error'] = 2;
				header("Location: check_in_error.php");
			}
		}
		
		elseif (isset($_POST['leave']) && isset($_SESSION["id"])) 
		{
			$link = getConnection();

			unset($_SESSION["id"]);

			header("Location: index.php"); 
		} 
	
		else
		{
			http_response_code (406);
		}
		
		exit();
	}
	
	
?>