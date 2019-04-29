<?php
	session_start();
	$db = mysqli_connect ("localhost","root","","diplom_voprosnik");
?>

<html>
	<head>
			<title>Вопросник</title>
			<meta lang="ru">
			<link rel="stylesheet" type="text/css" href="../../style.css">
	 </head>
		<body>
			<div class="header">
				<img src="../../logo.png">
				</div>


			</div>

				<div class="flex">
    			<div class="itm itm1"><a class="button" href="../../my_questions">Мои Вопросы</a></div>
    			<div class="itm itm2"><a class="button" href="../">Создать вопрос</a></div>
    			<div class="itm itm3"><a class="button" href="../../create_test">Создать тест</a></div>
    			<div class="itm itm4"><a class="button" href="../../export">Экспорт вопросов</a></div>
			</div>

				<div>
					<h2>Создание вопроса с Множественным выбором</h2>

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
						<p>Введите варианты ответа и выберите верный</p>
							<input type="checkbox" name="ans" value="1" for="ans1"> <input type="text" for="ans1"> <br> <br>
							<input type="checkbox" name="ans" value="2" for="ans2"> <input type="text" for="ans2"> <br> <br>
							<input type="checkbox" name="ans" value="3" for="ans3"> <input type="text" for="ans3"> <br> <br>
							<input type="checkbox" name="ans" value="4" for="ans4"> <input type="text" for="ans4">
						<p><input type="submit" name="send"></p>
					</form>
				</div>

		</body>



</html>
