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
    			<div class="itm itm4"><a class="button" href="../../export">Экспорт вопросов</a></div>
			</div>

				<div>
					<h2>Создание вопроса с Множественным выбором</h2>
					<div class="form">
										<form method="POST">
						<p><b>Введите название вопроса: </b> </p>
						<input name="name_quest" type="text" size="100" maxlength="100"> <br>
						<p><b>Введите текст вопроса: </b> </p>
						<textarea name="text_quest"> </textarea>
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
						<p>Введите верные варианты ответа: </p>
							<input type="text" name="true_ans" placeholder="Введите верный вариант ответа"> <br>
							<div id="input0"> </div>
							<input type="button" value="Добавить вариант ответа"  onclick="addInput()"> <br>
							<input type="text" name="false_ans" placeholder="Введите неверный вариант ответа"> <br>
							<div id="input1"> </div>
							<input type="button" value="Добавить вариант ответа"  onclick="addInput_false_ans()">
							<script>
							var x = 0;

function addInput() {
if (x < 10) {
	var str = '<input type="text" name="true_ans" placeholder="Введите верный варинат ответа"> <br> <div id="input' + (x + 1) + '"></div>';
	document.getElementById('input' + x).innerHTML = str;
	x++;
} else
{
	alert('STOP it!');
}
}

function addInput_false_ans() {
	if (x < 10) {
		var str = '<input type="text" name="false_ans" placeholder="Введите неверный варинат ответа"> <br> <div id="input' + (x + 1) + '"></div>';
		document.getElementById('input' + x).innerHTML = str;
		x++;
	} else
	{
		alert('STOP it!');
	}
	}
							</script>
					</form> </div>
				</div>

		</body>



</html>
