<?php
	$mysqli = new mysqli('localhost', 'root','', 'voprosnik');
	$predmet_obl = "SELECT * FROM pred_obl";
	mysqli_query($mysqli,"SET NAMES 'utf8'");
	$result_select = mysqli_query($mysqli,$predmet_obl);
	if (mysqli_connect_errno()) {
		echo "Подключение невозможно: ".mysqli_connect_error();
	}
?>

<html>
	<head>
			<title>Вопросник</title>
			<meta lang="ru">
			<link rel="stylesheet" type="text/css" href="../../style.css">
	 </head>
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
					<h2>Создание вопроса с Единичным выбором</h2>
					<div class="form">
						<form action="create.php" method="POST">
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
							<label>Введите верный ответ: </label><br>
							<input name="true_ans" type="text" maxlength="20"><br>
							<label>Введите неверные ответы: </label> <br>
							<input type="text" name="false_ans" class="false_ans"> <br>
							<!-- <div class="add">Добавить неверный вариант ответа</div>
							<script>
var $add = document.getElementsByClassName('add')[0];
var $form = document.getElementsByClassName('form')[0];
$add.addEventListener('click', function(event) {
  var $input = document.createElement('input');
  $input.type = 'text';
  $input.placeholder = 'Неверный ответ';
  $input.classList.add('false_ans');
  $form.insertBefore($input, $add);
});							</script> -->
							<input name="submit" type="submit" value="Отправить">
						</form>
					</div>
				</div>
		</body>
</html>
