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
				<div class="flex">
    			<div class="itm itm1"><a class="button" href="#">Подтверждение регистрации</a></div>
    			<div class="itm itm2"><a class="button" href="all_questions">Все вопросы</a></div>
    			<div class="itm itm4"><a class="button" href="pred_obl">Предметные области</a></div>
					<div class="itm itm4"><a class="button" href="set_user">Управление пользователями</a></div>
			</div>
				</div>
			<div class="tabs">
    <input id="tab1" type="radio" name="tabs" checked>
    <label for="tab1" title="questions">Вопросы</label>

    <input id="tab2" type="radio" name="tabs">
    <label for="tab2" title="types">Предметные области</label>

    <section id="content-tab1">
        <p>
		Здесь отобрадаются вопросы пользователей
        </p>
    </section>
    <section id="content-tab2">
			<?php
			mysqli_query($mysqli,"SET NAMES 'utf8'");
			$name_obl = "SELECT * FROM pred_obl";
			$result_select = mysqli_query($mysqli,$name_obl);
			while ($object = mysqli_fetch_object($result_select)){
				echo "<p> $object->name_obl</p>";
			}
		?>
         <a href="">Добавить предметную область</a>
         <form method="POST" action="">
         	<p>Введите название предметной области: <input type="text" name="name_obl">  <input type="submit" value="Добавить"> </p>
					<?php
						if (isset($_POST["name_obl"])) {
							$sql = mysqli_query($mysqli, "INSERT INTO `pred_obl` (`name_obl`) VALUES ('{$_POST['name_obl']}')");
							if ($sql){
								echo "<p> Данные успешно добавлены в таблицу. </p>";
							}
								else{
									echo '<p> Произошла ошибка: '. mysqli_error($mysqli) . '</p>';
								}
						}
					?>
         </form>
        </p>
    </section>
</div>



	 </body>


</html>
