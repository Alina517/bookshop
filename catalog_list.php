<?php
	$query = queryCatalog($select_genre);
		if($query)
		{
			$num = 0;
			while ($data  =  mysqli_fetch_array($query))
			{ ?>
				<div class="card mb-3" style="max-width: 900px;">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img src="images/<?php echo $data['book_image'];?>" class="card-img" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h4 class="card-title"><?php echo $data['book_name'];?></h4>
								<p class="card-text">Автор: <b><?php echo $data['book_author'];?></b></p>
								<p class="card-text"><?php echo $data['book_description'];?></p>
								<a href="book.html" class="card-link">Подробнее...</a>
								<div class="row mt-2">
									<div class="col">
										<button type="button" class="btn btn-outline-dark">В корзину</button>
									</div>
									<div class="col">
										<h4 class="price"><?php echo $data['book_price'];?> р.</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php $num++;
			}
			if(0 == $num)
			{ ?>
				<h4>Таких книг еще нет в магазине</h4>
			<?php 
			}
		}
		else
		{ ?>
			<h4>Запрос не выполнен</h4>
		<?php } 
		?>