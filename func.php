<?php
	function getConnection()
	{
		return mysqli_connect("localhost", "root", "", "books_shop");
	}
	
	function tableOfContents ($text)
	{
		//Сбор заголовков
		$text = stripslashes($text);
		preg_match_all("/<h3.*?>(.*?)<\/h3>/i", $text, $items);
		 
		//Формирование якорного меню
		if (!empty($items[1])) {
			?>
			<div class="container">
				<h2 class="mt-5 mb-4">Интересные факты о книгах</h2>
				<div class="texts-list table-of-contents">
					<h4 class="mt-5 mb-4">Содержание</h4>
					<div class="list-group mb-5">
						<?php
						foreach ($items[1] as $i => $row) {
							echo '<a class="list-group-item list-group-item-action list-group-item-light" 
							href="#tag-' . ++$i . '">' . $row . '</a>';
						}
						?>					
					</div>
				</div>
			<?php	
		}

		//Вставка якорей
		if (!empty($items[0])) {
			foreach ($items[0] as $i => $row) {
				$text = str_replace($row, '<a name="tag-' . ++$i . '"></a>' . $row, $text);
			}
		}
		
		echo $text;
		?> 
		</div>
	<?php
	}
?>