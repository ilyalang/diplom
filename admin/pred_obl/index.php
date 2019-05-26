<html>
<head>
  <title>Вопросник</title>
  <meta lang="ru">
  <link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
  <div class="header">
      <img src="../../logo.png"> <h4>Административная панель</h4>
      <div class="flex">

        <div class="itm itm2"><a class="button" href="../all_questions">Все вопросы</a></div>
        <div class="itm itm4"><a class="button" href="#">Предметные области</a></div>
        <div class="itm itm4"><a class="button" href="../">Управление пользователями</a></div>
    </div>
      </div>
<?php
$mysqli = new mysqli('localhost', 'root','', 'voprosnik');
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
</body>
</html>
