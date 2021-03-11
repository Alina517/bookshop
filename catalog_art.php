<?php
	require_once "header.php";
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-4">
			<div class="list-group mt-5 mb-5 text-center">
				<a href="catalog_belletristic.php" class="list-group-item" >Художественная литература</a>
				<a href="catalog_art.php" class="list-group-item active" >Искусство</a>
				<a href="catalog_education.php" class="list-group-item" >Образование</a>
				<a href="catalog_for_children.php" class="list-group-item" >Книги для детей</a>
				<a href="catalog_over.php" class="list-group-item">Другое</a>
			</div>	
		</div>
		<div class="col-7 mt-5">
			<?php
				$select_genre = 2;
				require "catalog_list.php";
			?>
		</div>
	</div>
</div>

<?php
	require_once "footer.php";
?>