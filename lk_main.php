<?php 
	require "header.php";
?>

<div class="container">
		<h2 class="mt-5">Личный кабинет</h2>
		<ul class="nav nav-tabs mt-4">
			<li class="nav-item">
				<a class="nav-link active" href="lk_main.php">Профиль</a>
			</li>
			<li class="nav-item">
				<a class="nav-link lk" href="lk_shop_hist.php">История покупок</a>
			</li>
		</ul>
		<div class="row mt-3 ">
			<?php
				$_id = mysqli_real_escape_string($link,$_SESSION['id']);
				if($link){
					$query = mysqli_query($link,"SELECT * FROM users WHERE user_id='$_id'");
					$data = mysqli_fetch_assoc($query);
				}
				else {
					echo 'Error';
				}
			?>
			<div class="col">
				<h4 class="font-weight-bold mb-5">Личные данные</h4>
				<div class="input-group mb-1">	
					<p><b>Имя пользователя: </b></p><p>&#160;&#160;&#160;&#160; <?php echo $data['user_name'];?></p>
				</div>
				<div class="input-group mb-1">
					<p><b>Адрес электронной почты: </b></p><p>&#160;&#160;&#160;&#160; <?php echo $data['user_login'];?></p>
				</div>
				<div class="input-group mb-1">	
					<p><b>Телефон: </b></p><p>&#160;&#160;&#160;&#160; <?php echo $data['user_telephone'];?></p>
				</div>
			</div>
			<div class="col">
				<h4 class="font-weight-bold mb-5">Информация для доставки</h4>
				<div class="input-group mb-1">
					<p><b>Страна: </b></p><p>&#160;&#160;&#160;&#160; <?php echo $data['user_country'];?></p>
				</div>				
					<div class="input-group mb-1">	
						<p><b>Регион: </b></p><p>&#160;&#160;&#160;&#160; <?php echo $data['user_region'];?></p>
					</div>								
					<div class="input-group mb-1">	
						<p><b>Город: </b></p><p>&#160;&#160;&#160;&#160; <?php echo $data['user_city'];?></p>
					</div>									
				<div class="input-group mb-1">	
					<p><b>Адрес: </b></p><p>&#160;&#160;&#160;&#160; <?php echo $data['user_address'];?></p>
				</div>
				<div class="input-group mb-5">	
					<p><b>Почтовый индекс: </b></p><p>&#160;&#160;&#160;&#160; <?php echo $data['user_postal_code'];?></p>
				</div>
			</div>
		</div>
		
		<div class="mt-1">
			<button type="submit" class="btn btn-primary save mt-5">Изменить</button>
		</div>
	</div>

<?php 
	require "footer.php";
?>