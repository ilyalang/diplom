
<?php
	$mysqli = new mysqli('localhost', 'root','', 'voprosnik');
	if (mysqli_connect_errno()) {
		echo "Подключение невозможно: ".mysqli_connect_error();
	}
?>


<html>
	<head>
			<title>Вопросник</title>
			<meta lang="ru">
			<link rel="stylesheet" type="text/css" href="../style.css">
	 </head>
		<body>
			<div class="header">
				<img src="../logo.png">
				</div>
			<div class="flex">
    			<div class="itm itm1"><a href="#">Мои Вопросы</div>
    			<div class="itm itm2"><a href="../create_question">Создать вопрос</a></div>
    			<div class="itm itm3"><a href="../create_test">Создать тест</a></div>
    			<div class="itm itm4"><a href="../export">Экспорт вопросов</a></div>
			</div>
 						<div>
 							<div class="type_quest">
 								<center> <h4>Вопросы по типу</h4> </center>
 								<div class="ul"><p>Короткий ответ</p></div>
 								<div class="ul"><p>Единичный выбор</p></div>
 								<div class="ul"><p>Множественный выбор</p></div>
 								<div class="ul"><p>Да/Нет</p></div>
 								<div class="ul"><p>Числовой</p></div>
 								<div class="ul"><p>Сопоставление</p></div>
 								<div class="ul"><p>Упорядочивание</p></div>
 							</div>
 							<div class="questions">
 								<h1>Мои вопросы</h1>
								<table>
									<tr>
										<th>Тип вопроса: Короткий ответ</th>
									</tr>
									<tr>
										<th>Красный гриб с белыми точками</th>
										<th>Верный ответ: Гриб </th>
										<th>Варианты ответов: --- </th>
									</tr>
								</table>
 							</div>
 						</div>
		</body>
</html>
