<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="C:/Users/Алина/Desktop/Учёба/3_курс/Web/Лаб1/Сайт/css/bootstrap.min.css">
	<link rel="stylesheet" href="style_forms.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	 
	<title>Книжный магазин | Вход</title>
	</head>
	<body>
		<div class="container mt-5">
			<div class="row">
				<div class="col">
				</div>
				<div class="col-4">
					<h3 align="center" class="mb-4">Добро пожаловать</h3>
					<form action="actions.php" method="POST">
						<input type="hidden" name="enter">
						<div class="form-group">
							<label for="exampleInputEmail1">Адрес электронной почты</label>
							<input type="email" class="form-control" id="exampleInputEmail1" name="login">
							<small id="emailHelp" class="form-text text-muted"></small>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Пароль</label>
							<input type="password" class="form-control" id="exampleInputPassword1" name="password">
						</div>
						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Запомнить мой выбор</label>
						</div>
						<button type="submit" class="btn btn-primary mt-3">Войти</button>
					</form>
				</div>
				<div class="col">
				</div>
			</div>
		</div>
	</body>
</html>