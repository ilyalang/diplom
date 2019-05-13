<?php
	$db = mysqli_connect ("localhost","root","","diplom_voprosnik");
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
    			<div class="itm itm1"><a class="button" href="../../my_questions">Мои Вопросы</a></div>
    			<div class="itm itm2"><a class="button" href="../">Создать вопрос</a></div>
    			<div class="itm itm4"><a class="button" href="../../export">Экспорт вопросов</a></div>
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
							<input name="true_ans" type="text" placeholder="Введите верный ответ" maxlength="20"> <br>
							<label>Введите неверные ответы: </label> <br>
							<input type="text" name="false_ans[]" placeholder="Введите неверный ответ"> <br>
							<div id="input0"></div>
							<input type="button" value="Добавить строку" onclick="addInput()">
							<script>
							var x = 0;

function addInput() {
if (x < 10) {
	var str = '<input type="text" name="false_ans[]" placeholder="Введите неверный ответ"> <br> <div id="input' + (x + 1) + '"></div>';
	document.getElementById('input' + x).innerHTML = str;
	x++;
} else
{
	alert('STOP it!');
}
}
							</script>
							<input name="submit" type="submit" value="Отправить">
						</form>
					</div>
				</div>
		</body>
</html>
