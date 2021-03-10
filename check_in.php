<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="style_forms.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	 
	<title>Книжный магазин | Регистрация</title>
	</head>
	<body>
		<div class="container mt-5">
			<div class="row">
				<div class="col">
				</div>
				<div class="col-4">
					<h3 align="center" class="mb-4">Регистрация</h3>
					<form action="actions.php" method="POST">
						<input type="hidden" name="signup">
						<div class="form-group">
							<div class="form-group">
								<label>Имя</label>
								<input type="text" class="form-control" placeholder="ФИО" name="fio">
							</div>
							<label>Адрес электронной почты</label>
							<input type="text" class="form-control" name="login">
						</div>
						<div class="form-group">
							<label>Придумайте пароль</label>
							<input type="password" class="form-control" name="password">
						</div>
						<button type="submit" class="btn btn-primary mt-4">Готово</button>
					</form>
				</div>
				<div class="col">
				</div>
			</div>
		</div>
	</body>
</html>