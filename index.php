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
	<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Вопросник</title>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<link rel="stylesheet" href="style.css">
	 </head>
		<body>
			<div class="header">
				<img src="logo.png">
				</div>
							<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
      <form class="login100-form validate-form flex-sb flex-w">
        <span class="login100-form-title p-b-32">
          Авторизация
        </span>

        <span class="txt1 p-b-11">
          Логин
        </span>
        <div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
          <input class="input100" type="text" name="username" >
          <span class="focus-input100"></span>
        </div>

        <span class="txt1 p-b-11">
          Пароль
        </span>
        <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
          <span class="btn-show-pass">
            <i class="fa fa-eye"></i>
          </span>
          <input class="input100" type="password" name="pass" >
          <span class="focus-input100"></span>
        </div>

        <div class="flex-sb-m w-full p-b-48">
          <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
            <label class="label-checkbox100" for="ckb1">
              Запомнить меня
            </label>
          </div>

          <div>
            <a href="#" class="txt3">
              Забыли пароль?
            </a>
          </div>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Войти
          </button><button class="login100-form-btn">
            Зарегистрироваться
          </button>
        </div>

      </form>
    </div>
  </div>
</div>
		</body>
</html>
