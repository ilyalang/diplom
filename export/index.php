<?php
	$mysqli = new mysqli('localhost', 'root','', 'voprosnik');
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
				<img src="../logo.png">
				</div>

				<div class="flex">
    			<div class="itm itm1"><a class="button" href="../my_questions">Мои Вопросы</a></div>
    			<div class="itm itm2"><a class="button" href="../create_question">Создать вопрос</a></div>
    			<div class="itm itm4"><a class="button" href="#">Экспорт вопросов</a></div>
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
				<?php
					function fetch_data(){
						$output = '';
						include('../database/bd.php');
						$sql = "SELECT * FROM answers_multi ORDER BY id_ans_multi ASC";
						$result = mysqli_query($db,$sql);
						while ($row = mysqli_fetch_array($result)){
							$output .= '<tr>
								<td>'.$row["id_multi"].'</td>
								<td>'.$row["id_v_multi"].'</td>
								<td>'.$row["ans_multi"].'</td>
								<td>'.$row["yn_multi"].'</td>
								</tr>';
						}
						return $output;
					}
					if(Isset($_POST['']))
				?>

		</body>



</html>
