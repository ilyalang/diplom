<?php
  $db = mysqli_connect ("localhost","root","","diplom_voprosnik");
?>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Вопросник</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="../style.css">
  </head>

  <body>
    <div class="header">
      <img src="../logo.png">
      </div>
      <div>
      <div class="auth">
    <form action="save_user.php" method="POST">
      <h1>Регистрация</h1>
      <label>Ваше Фамилия, Имя, Отчетство:</label>
      <input name="FIO" type="text" size="30" maxlenght="70"> <br>
      <label>Введите ваш E-mail:</label>
      <input name="email" type="text" size="30" maxlength="50"> <br>
      <input type="submit" name="submit" value="Зарегистрироваться">
  </body>
</div> </div>


</html>
