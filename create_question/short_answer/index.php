<?php
  $db = mysqli_connect ("localhost","root","","diplom_voprosnik");
  mysqli_query($db,"SET CHARACTER SET 'utf8'");
	mysqli_query($db,"SET NAMES 'utf8'");
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
						<label>Введите верный ответ: </label>
						<input name="true_ans" type="text" maxlength="20"><br>
						<input type="submit" name="submit" value="Отправить">
					</form> </div>

				</div>


		</body>



</html>
