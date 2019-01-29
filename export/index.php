<?php 



?>


<html> 
	<head>
			<title>Вопросник</title>
			<meta lang="ru">
			<link rel="stylesheet" type="text/css" href="../style.css">
	 </head>
		<body> 
			<div class="header">
				<img src="../logo.png">
				</div>

				<div class="flex">
    			<div class="itm itm1"><a href="../">Мои Вопросы</div>
    			<div class="itm itm2"><a href="../create_question">Создать вопрос</a></div>
    			<div class="itm itm3"><a href="../create_test">Создать тест</a></div>
    			<div class="itm itm4"><a href="#">Экспорт вопросов</a></div>
			</div>

				<div> 
					<p> Инструкция: Выберите нужные вам вопросы, после выберите нужный вам формат документа, после нажмите на кнопку "Экспорт" </p>
					<div>



					 </div>
							<p> Выберите формат: </p>
							<p><input type="radio" name="excel">Excel</p>
							<p><input type="radio" name="word">Word </p>
							<p><input type="radio" name="pdf">PDF</p>
							<input type="button" name="save_file" value="Сохранить">
				</div>


		</body>



</html>