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
    			<div class="itm itm1"><a href="../../">Мои Вопросы</div>
    			<div class="itm itm2"><a href="../">Создать вопрос</a></div>
    			<div class="itm itm3"><a href="../../">Создать тест</a></div>
    			<div class="itm itm4">Экспорт вопросов</div>
			</div>

				<div> 
					<h2>Создание вопроса с коротким ответом</h2>

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
						<p>Выберите верный вариант ответа</p>
							<p><input name="var_ans" type="radio" value="1"> Да </p>
							<p><input name="var_ans" type="radio" value="2"> Нет </p> 
						<p><input type="submit"></p>
					</form>

				</div>


		</body>



</html>