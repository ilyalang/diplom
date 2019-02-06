<?php 
	$mysqli = new mysqli('localhost', 'root','', 'diplom');
	if (mysqli_connect_errno()) {
		echo "Подключение невозможно: ".mysqli_connect_error();
	}
?>


<html> 
	<head>
			<title>Вопросник</title>
			<meta lang="ru">
			<link rel="stylesheet" type="text/css" href="../style.css">
	 </head>
	 <body> 
	 	<div class="header">
				<img src="../logo.png"> <h4>Административная панель</h4>
				</div>
			<div class="tabs">
    <input id="tab1" type="radio" name="tabs" checked>
    <label for="tab1" title="questions">Вопросы</label>
 
    <input id="tab2" type="radio" name="tabs">
    <label for="tab2" title="types">Типы вопросов</label>

    <input id="tab3" type="radio" name="tabs">
    <label for="tab3" title="pred_obl">Предметные области</label>
 
 
    <section id="content-tab1">
        <p>
		Здесь отобрадаются вопросы пользователей
        </p>
    </section>  
    <section id="content-tab2">
        <p>
         Здесь отображаются типы вопросов 
        </p>
    </section>    
    <section id="content-tab3">
        <p>
         Здесь отображаются предметные области </p>
         
         <a href="">Добавить предметную область</a>
         <form> 
         	<p>Введите название предметной области: <input type="text">  <input type="submit" value="Добавить"> </p>
         </form>
        </p>
    </section> 
</div>



	 </body>


</html>