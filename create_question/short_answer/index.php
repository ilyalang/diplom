<?php
  $db = mysqli_connect ("localhost","root","","diplom_voprosnik");
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
    			<div class="itm itm1"><a class="button" href="../../my_questions">Мои Вопросы</a></div>
    			<div class="itm itm2"><a class="button" href="../">Создать вопрос</a></div>
    			<div class="itm itm4"><a class="button" href="../../export">Экспорт вопросов</a></div>
			</div>

				<div>
					<h2>Создание вопроса с коротким ответом</h2>
					<div class="form">
					<form method="POST" action="create.php">
						<label>Введите название вопроса: </label>
						<input name="name_quest" type="text" size="100" maxlength="100"> <br>
						<label>Введите текст вопроса: </label> <br>
						<textarea name="text_quest"> </textarea>
						<p>Выберите предметную область:
							<?php
							echo "<select name = 'id_obl'>";
							while ($object = mysqli_fetch_object($result_select)){
								echo "<option value = '$object->name_obl' name='id_obl'> $object->name_obl </option>";
							}
							echo "</select>";
?> </p> <br>
						<label>Введите верный ответ: </label>
						<input name="true_ans" type="text" maxlength="20"><br>
						<input type="submit" name="submit" value="Отправить">
					</form> </div>

				</div>


		</body>



</html>
