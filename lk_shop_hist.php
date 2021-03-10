<?php
	require "header.php";
?>
	<div class="container">
		<h2 class="mt-5">Личный кабинет</h2>
		<ul class="nav nav-tabs mt-4">
			<li class="nav-item">
				<a class="nav-link lk" href="lk_main.php">Профиль</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" href="lk_shop_hist.php">История покупок</a>
			</li>
		</ul>
		<div class="row mt-3 head-tab">
			<div class="col-2 column-name">
				<p><b>Дата</b></p>
			</div>
			<div class="col-5">
				<p><b>Наименование товара</b></p>
			</div>
			<div class="col-3">
				<p><b>Количество</b></p>
			</div>
			<div class="col">
				<p><b>Сумма</b></p>
			</div>
		</div>
		<div class="row mt-3 line-tab">
			<?php 
				$_id = mysqli_real_escape_string($link,$_SESSION['id']);
				if($link){
					$query = mysqli_query($link,"SELECT * FROM purchase_history WHERE user_id='$_id'");
					if($query){
						$num = 0;
						while ($data  =  mysqli_fetch_array($query))
						{ ?>
							<div class="col-2">
								<p><?php echo $data['purchase_date'];?></p>
							</div>
							<div class="col-5">
								<p><?php echo $data['book_name'];?></p>
							</div>
							<div class="col-3">
								<p><?php echo $data['purchase_quant'];?></p>
							</div>
							<div class="col">
								<p><?php echo $data['purchase_cost'];?> р.</p>
							</div>
						<?php $num++;}
						if(0 == $num)
						{
							echo 'Вы еще ничего не покупали';
						}
					}
					else{
						echo 'Запрос не выполнен';
					}
				}
				else {
					echo 'Нет соединения с базой данных';
				}?>			
		</div>
	</div>
	
<?php
	require "footer.php";
?>