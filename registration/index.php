<?php
  $db = mysqli_connect ("localhost","root","","diplom_voprosnik");
?>

<html>
  <head> </head>

  <body>
    <form action="save_user.php" method="POST">
      <label>Ваше Фамилия, Имя, Отчетство:</label>
      <input name="FIO" type="text" size="30" maxlenght="70"> <br>
      <label>Введите ваш E-mail:</label>
      <input name="email" type="text" size="30" maxlength="50"> <br>
      <input type="submit" name="submit" value="Зарегистрироваться">
  </body>



</html>
