<?php
	$mysqli = new mysqli('localhost', 'root','', 'voprosnik');
	if (isset($_POST['login']) && isset($_POST['password']))
	{
		$login = mysqli_real_escape_string($_POST['login']);
		$password = ($_POST['password']);

		$query = "SELECT `id_user`
							FROM `users`
							WHERE `login`='{$login}' AND `password`='{$password}'
							LIMIT 1";
		$sql = mysqli_query($query,$mysqli) or die (mysqli_error());

		if (mysqli_num_rows($sql) == 1) {
			$row = mysqli_fetch_assoc($sql);
			$_SESSION['user_id'] = $row['id_user'];
		}
		else {
			die('Не найден пользователь с данным логином и паролем! ');
		}
		if (isset($_SESSION['user'])){
			header('location: /my_questions/index.php');
			exit();
		}
	}

?>


<html>
	<head>
			<title>Вопросник</title>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<link rel="stylesheet" type="text/css" href="style.css">
	 </head>
		<body>
			<div class="header">
				<img src="logo.png">
				</div>
					<div class="auth">
						<form>
							<fieldset>
								<legend>Авторизация</legend>
								<p>Логин: <input name="login"></p>
								<p>Пароль: <input type="password" name="pass"></p>
								<p><input type="submit" value="Вход"></p>
							</fieldset>


						</form>



					</div>


		</body>



</html>
