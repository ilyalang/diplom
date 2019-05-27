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
							<h2>Создание вопроса с сопоставлением</h2>
							<div class="form">
								<form action="create.php" method="POST">
									<label>Введите название вопроса: </label>
									<input name="name_quest" type="text" size="100" maxlength="100"> <br>
									<label>Введите текст вопроса: </label> <br>
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
								?> 					
								</select> </p> <br>
								<label>Введите ответы согласно порядку: </label> <br>
								<input type="text" name="comparison_ans[]" placeholder="Введите ответ"> <br>
								<div id="input0"> </div>
								<input type="button" value="Добавить строку" onclick="addInput()"> <br>
								<input type="submit" name="submit" value="Отправить">
									<script>
									var x = 0;

									function addInput() {
									if (x < 10) {
									var str = '<input type="text" name="comparison_ans[]" placeholder="Введите ответ"> <br> <div id="input' + (x + 1) + '"></div>';
									document.getElementById('input' + x).innerHTML = str;
									x++;
									} else
									{
									alert('STOP it!');
									}
									}
									</script>
								</form>

							</div>


						</div>
