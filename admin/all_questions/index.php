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
          <div class="itm itm1"><a class="button" href=../>Подтверждение регистрации</a></div>
          <div class="itm itm2"><a class="button" href="#">Все вопросы</a></div>
          <div class="itm itm4"><a class="button" href="../pred_obl">Предметные области</a></div>
          <div class="itm itm4"><a class="button" href="../set_user">Управление пользователями</a></div>
      </div>
        </div>
    <div>
      <table>
          <tr>
            <td>Наименование вопроса</td>
            <td>Текст вопроса</td>
            <td>Верные ответы</td>
            <td>Неверные ответы</td>
          </tr>
          <tr>
            <?php
              include ('../../database/bd.php');
              $select = mysqli_query($db,"SELECT name_quest FROM `diplom_voprosnik`.`short_question`");
              while($row = mysqli_fetch_array($select)){
                $id=$row['name_quest'];

                echo $id;
              }
              ?>
          </tr>
      </table>

    </div>
  </body>


</html>
