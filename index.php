<?php
	session_start();
?>


<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Вопросник</title>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<link rel="stylesheet" href="style.css">
	 </head>
		<body>
			<div class="header">
				<img src="logo.png">
				</div>
					<div class="auth">
						<form action="testreg.php" method="POST">
						<h1>Авторизация</h1>
							<label>Ваш логин: </label>
							<input name="login" type="text"> <br>
							<label>Пароль: </label>
							<input name="password" type="password"> <br>
							<input type="submit" name="submit" value="Войти">
							<input type="button" value="Зарегистрироваться" onclick="location.href='registration'">
							<?php


							?>
					 </div>
		</body>
</html>
