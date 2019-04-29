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
    			<div class="itm itm3"><a class="button" href="../../create_test">Создать тест</a></div>
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
										<?php
										echo "<select name = 'id_obl'>";
										while ($object = mysqli_fetch_object($result_select)){
											echo "<option value = '$object->name_obl' name='id_obl'> $object->name_obl </option>";
										}
										echo "</select>";
			?> </p> <br>
								<label>Введите ответы: </label> <br>
								<div style="display: flex">
								<input type="text" name="text_ans" placeholder="Введите текст ответа">
								<input type="text" name="ans" placeholder="Введите ответ">
							</div> <br>
								<input type="submit" name="submit" value="Отправить">

								</form>

							</div>


						</div>
