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
    			<div class="itm itm1"><a href="../my_questions">Мои Вопросы</a></div>
    			<div class="itm itm2"><a href="#">Создать вопрос</a></div>
    			<div class="itm itm3"><a href="../create_test">Создать тест</a></div>
    			<div class="itm itm4"><a href="../export">Экспорт вопросов</a></div>
			</div>
		<h1 class="h1">Создать вопрос</h1>
<div class="cr_quest">
	<a href="short_answer">Создать вопрос с коротким ответом</a> <br>
	<a href="single_choice">Создать вопрос с Единичным выбором</a> <br>
	<a href="multiple_choice">Создать вопрос с Множественным выбором</a> <br>
	<a href="yes_or_no">Создать вопрос с Да/Нет</a> <br>
	<a href="numeric">Создать вопрос с числовым ответом</a> <br>
	<a href="comparison">Создать вопрос с сопоставлением</a> <br>
	<a href="ordering">Создать вопрос с упорядочиванием</a>
</div>
		</body>



</html>
