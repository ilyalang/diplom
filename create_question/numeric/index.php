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
					<h2>Создание вопроса с числовым ответов</h2>

					<form method="POST">
						<p><b>Введите название вопроса: </b> </p>
						<input type="text" name="name_quest" class="name_quest" size="90">
						<p><b>Введите текст вопроса: </b> </p>
						<input type="text" name="text_quest" class="name_quest" size="150">
							<p>Выберите предметную область:
								<?php
								echo "<select name = 'id_obl'>";
								while ($object = mysqli_fetch_object($result_select)){
									echo "<option value = '$object->name_obl' name='id_obl'> $object->name_obl </option>";
								}
								echo "</select>";
 ?>
							</p>
							</datalist>
						<p>Введите вариант ответа</p>
							<input type="text" name="var_ans">
						<p><input type="submit" name="send"></p>
						<?php
						if (isset($_POST["name_quest"]) && isset($_POST["text_quest"]) && isset($_POST["var_ans"]) ) {
							$name_quest = $_POST['name_quest'];
							$text_quest = $_POST['text_quest'];
							$sql = mysqli_query($mysqli, "INSERT INTO `questions` (`name_quest`,`text_quest`,`id_obl`) VALUES ('$name_quest', '$text_quest','$id_obl')");
							$sql2 = mysqli_query($mysqli, "INSERT INTO `success_ans` (`text_sa`) VALUES ('{$_POST['var_ans']}')");
							if ($sql){
								echo "<p> Данные успешно добавлены в таблицу. </p>";
							}
								else{
									echo '<p> Произошла ошибка: '. mysqli_error($mysqli) . '</p>';
								}
						}
						?>
					</form>

				</div>


		</body>



</html>
