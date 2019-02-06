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