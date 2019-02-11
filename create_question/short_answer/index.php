<?php
	$mysqli = new mysqli('localhost', 'root','', 'voprosnik');
	$predmet_obl = "SELECT * FROM pred_obl";
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

					<form>
						<p><b>Введите название вопроса: </b> </p>
						<input type="text" name="name_quest" class="name_quest" size="90">
						<p><b>Введите текст вопроса: </b></p>
							<textarea></textarea>
							<p>Выберите предметную область:
								<?php
								echo "<select name = ''>";
								while ($object = mysqli_fetch_object($result_select)){
									echo "<option value = '$object->name_obl' > $object->name_obl </option>";
								}
								echo "</select>";
 ?>
							</p>
							</datalist>
						<p>Введите вариант ответа</p>
							<input type="text" name="var_ans">
						<p><input type="submit"></p>
					</form>

				</div>


		</body>



</html>
