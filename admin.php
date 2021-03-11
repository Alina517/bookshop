<?php
	require_once "header.php";
?>

	<div class="container">	
		<h2 class="mt-5 mb-4">Добавить книгу</h2>
		<form action="actions.php" method="POST">
			<input type="hidden" name="add_book">
			<div class="row mt-3 mb-5">
				<div class="col-5">
					<div class="input-group mb-3">	
						<input type="text" class="form-control" name="name" placeholder="Название*">
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Автор" name="author">
					</div>
					<div class="mb-3">
						<textarea class="form-control" name="description" rows="4" placeholder="Описание" ></textarea>
					</div>
					<div class="input-group mb-3">
						<select class="custom-select" id="inputGroupSelect01" name="genre">
							<option selected>Жанр</option>
							<option value="1">Художественная литература</option>
							<option value="2">Искусство</option>
							<option value="3">Образование</option>
							<option value="4">Для детей</option>
							<option value="5">Другое</option>
						</select>
					</div>
					<div class="input-group mb-3">	
						<input type="text" class="form-control"  placeholder="Цена*" name="price">
					</div>
					<div class="input-group mb-3">	
						<input type="text" class="form-control"  placeholder="Количество экземпляров" name="quant">
					</div>
					<div class="mb-3">
						<label for="formFileMultiple" class="form-label">Обложка</label>
						<input class="form-control" type="file" id="formFileMultiple" name="image" multiple>
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary save">Сохранить</button>
		</form>
	</div>


<?php
	require_once "footer.php";
?>