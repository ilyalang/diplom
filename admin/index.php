<?php
	$mysqli = new mysqli('localhost', 'root','', 'voprosnik');
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

    <section id="content-tab1">
        <p>
		Здесь отобрадаются вопросы пользователей
        </p>
    </section>
    <section id="content-tab2">
			<?php
				$result = mysqli_query($mysqli, "SELECT * FROM pred_ob");
				while ($row = mysqli_fetch_assoc($result)){
					echo $row['name_obl'];
				}
		?>
         <a href="">Добавить предметную область</a>
         <form>
         	<p>Введите название предметной области: <input type="text">  <input type="submit" value="Добавить"> </p>
         </form>
        </p>
    </section>
</div>



	 </body>


</html>
