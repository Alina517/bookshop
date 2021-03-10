<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="style1.css">
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	
	
    <title>Книжный магазин</title>
  </head>
 <body>
	<?php 
		include "connect.php";
	?>
    <header class="header">
		<div class="overlay">
			<div class="container-fluid">
				<div class="row">
					<div class="col-5">
						<div class="description ml-5 " style="margin-top: 70px;">
							<h1 style="margin-left: 0px;"><font color="#CBC8D1">Здесь</font></h1>
							<h1 style="margin-left: 100px;"><font color="#CBC8D1">живут</font></h1>
							<h1 style="margin-left: 200px;"><font color="#CBC8D1">книги</font></h1>
						</div>
					</div>
					<div class="col">
						<div class="search">
							<form class="form-inline">
								<input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search">
								<button class="btn btn-dark-search my-2 my-sm-0" type="submit"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
									<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
								</svg></button>
							</form>
						</div>
					</div>
					<div class="col-2">
						<?php 
							if ($isLogin){?>
								<form action="actions.php" method="POST">
									<div class="register row">
											<a class="btn btn-dark mr-2" type="submit" href="lk_main.php">Личный кабинет</a>			
											<input class="btn btn-dark" type="submit" name="leave" value="Выйти">
									</div>
								</form>
								
								<div class="basket">
									<a class="btn btn-dark p-2" href="basket.html" role="button">
										<svg  class="an" height="2em" width="2em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
										</svg>
										<span class="badge badge-light">0</span>
										<span class="sr-only">unread messages</span>
									</a>
								</div>
							<?php } 
							else {?>
								<div class="register">
									<a class="btn btn-dark mr-auto" type="submit" href="check_in.php">Регистрация</a>
									<a class="btn btn-dark" type="submit" href="login.php">Вход</a>
								</div>
								
								<div class="basket">
									<a class="btn btn-dark p-2" href="basket.html" role="button">
										<svg  class="an" height="2em" width="2em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
										</svg>
									</a>
								</div>
							<?php }?>
					</div>
				</div>
			</div>
		</div>
	</header>
	<nav class="navbar navbar-expand-lg">
		<a class="navbar-brand" href="index.php">Главная</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
	    </button>
		<div class="collapse navbar-collapse " id="navbarSupportedContent">
			<ul class="nav nav-pills">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle _menu" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Каталог</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="catalog.html">Художественная литература</a>
						<a class="dropdown-item" href="#">Искусство</a>
						<a class="dropdown-item" href="#">Образование</a>
						<a class="dropdown-item" href="#">Книги для детей</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Другое</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link _menu" href="article.php">Статья</a>
				</li>
				<li class="nav-item">
					<a class="nav-link _menu" href="#">Контакты</a>
				</li>
			</ul>	 
	   </div>
	</nav>
	