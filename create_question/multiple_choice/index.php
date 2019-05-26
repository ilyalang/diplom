<?php
	$db = mysqli_connect ("localhost","root","","diplom_voprosnik");
	mysqli_query($db,"SET CHARACTER SET 'utf8'");
	mysqli_query($db,"SET NAMES 'utf8'");
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
										<form action="create.php" method="POST">
						<p><b>Введите название вопроса: </b> </p>
						<input name="name_quest" type="text" size="100" maxlength="100"> <br>
						<p><b>Введите текст вопроса: </b> </p>
						<textarea name="text_quest"> </textarea>
						<p>Выберите предметную область:
							<select name="predobl">
							<?php
						$sql = "SELECT * FROM pred_obl";
						$result = mysqli_query($db,$sql);
						while ($row=mysqli_fetch_assoc($result)){
							$id = $row['id_obl'];
							$name1 = $row['name_obl'];
							echo "<option value=\"$id\">$name1</option>";
						}
?> 					</select> </p> <br>
						<p>Введите верные варианты ответа: </p>
							<input type="text" name="true_ans[]" placeholder="Введите верный вариант ответа"> <br>
							<div id="in_true0"> </div>
							<input type="button" value="Добавить вариант ответа"  onclick="addInput()"> <br>
							<input type="text" name="false_ans[]" placeholder="Введите неверный вариант ответа"> <br>
							<div id="in_false0"> </div>
							<input type="button" value="Добавить вариант ответа"  onclick="addInput_false_ans()">
							<script>
							var x = 0;
							var y = 0;

function addInput() {
if (x < 10) {
	var str = '<input type="text" name="true_ans[]" placeholder="Введите верный варинат ответа"> <br> <div id="in_true' + (x + 1) + '"></div>';
	document.getElementById('in_true' + x).innerHTML = str;
	x++;
} else
{
	alert('STOP it!');
}
}

function addInput_false_ans() {
	if (y < 10) {
		var str1 = '<input type="text" name="false_ans[]" placeholder="Введите неверный варинат ответа"> <br> <div id="in_false' + (y + 1) + '"></div>';
		document.getElementById('in_false' + y).innerHTML = str1;
		y++;
	} else
	{
		alert('STOP it!');
	}
	}
							</script>
							<input name="submit" type="submit" value="Отправить">
					</form> </div>
				</div>

		</body>



</html>
