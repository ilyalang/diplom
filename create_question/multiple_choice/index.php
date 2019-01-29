<?php 



?>


<html> 
	<head>
			<title>Вопросник</title>
			<meta lang="ru">
			<link rel="stylesheet" type="text/css" href="../../style.css">
	 </head>
		<body> 
			<div class="header">
				<div class="right"> 
					<p>Выйти</p> </div>

				</div>


			</div>
			
				<div class="flex">
    			<div class="itm itm1"><a href="../../my_questions">Мои Вопросы</div>
    			<div class="itm itm2"><a href="../">Создать вопрос</a></div>
    			<div class="itm itm3"><a href="../../create_test">Создать тест</a></div>
    			<div class="itm itm4"><a href="../../export">Экспорт вопросов</a></div>
			</div>

				<div> 
					<h2>Создание вопроса с Множественным выбором</h2>

					<form> 
						<p><b>Введите текст вопроса</b></p>
							<textarea></textarea>
							<p>Выберите предметную область: <input list="predmet"></p>
							<datalist id="predmet">
								<option value="Физика">
								<option value="Русский язык">
								<option value="Литература">
								<option value="Математика">
								<option value="Информатика">
								<option value="Химия">
								<option value="История">
								<option value="Обж">
								<option value="Общество">		
							</datalist>
						<p>Введите варианты ответов и выберите верные</p>
							<input name="var_ans" type="checkbox" name="1" value="a"> <input type="text"> <input type="image" name="picture" src="../534d.png"> <br> <br>
						<input type="button" value="Добавить вариант" onclick="newvar();">
						<p><input type="submit"></p>
					</form>

				</div>


		</body>



</html>