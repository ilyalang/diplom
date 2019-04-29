<?php
	$mysqli = new mysqli('localhost', 'root','', 'voprosnik');
	$predmet_obl = "SELECT * FROM pred_obl";
	mysqli_query($mysqli,"SET NAMES 'utf8'");
	$result_select = mysqli_query($mysqli,$predmet_obl);
	?>


<html>
	<head>
			<title>Вопросник</title>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8_general_ci" />
			<link rel="stylesheet" type="text/css" href="../../style.css">
	 </head>
		<body>
			<div class="header">
				<img src="../../logo.png">
				</div>



			</div>

				<div class="flex">
    			<div class="itm itm1"><a href="../../my_questions">Мои Вопросы</div>
    			<div class="itm itm2"><a href="../">Создать вопрос</a></div>
    			<div class="itm itm3"><a href="../../create_test">Создать тест</a></div>
    			<div class="itm itm4"><a href="../../export">Экспорт вопросов</a></div>
			</div>


				<div>
					<h2>Создание вопроса с коротким ответом</h2>
					<div class="form">
					<form method="POST">
						<label>Введите название вопроса: </label>
						<input name="name_quest" type="text" size="100" maxlength="100"> <br>
						<label>Введите текст вопроса: </label> <br>
						<textarea> </textarea>
					</form> </div>

				</div>


		</body>



</html>
