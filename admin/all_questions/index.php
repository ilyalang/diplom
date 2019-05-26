<?php
              include ('../../database/bd.php');
              $select = mysqli_query($db,"SELECT name_quest,text_quest,sh_true_ans FROM `short_question`");
              $info=array();
              while($row = mysqli_fetch_array($select)){
                $info[] = $row;
                $name=$row['name_quest'];
                $text=$row['text_quest'];
                $trueans=$row['sh_true_ans'];
              } ?>
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
          <div class="itm itm2"><a class="button" href="#">Все вопросы</a></div>
          <div class="itm itm4"><a class="button" href="../pred_obl">Предметные области</a></div>
          <div class="itm itm4"><a class="button" href="../">Управление пользователями</a></div>
      </div>
        </div>
    <div>
      <table border="1">
          <tr>
            <td>Наименование вопроса</td>
            <td>Текст вопроса</td>
            <td>Верные ответы</td>
            <td>Неверные ответы</td>
          </tr>
          <?php 
          include ('../../database/bd.php');
          $select = mysqli_query($db,"SELECT name_quest,text_quest,sh_true_ans FROM `short_question`");
         // $info=array();
          while($row = mysqli_fetch_array($select)){
          //  $info[] = $row;
            $name=$row['name_quest'];
            $text=$row['text_quest'];
            $trueans=$row['sh_true_ans'];
          echo "<tr>";
          echo "<td>";
          echo $name;
          echo "</td>";
          echo "<td>";
          echo $text;
          echo "</td>";
          echo "<td>";
          echo $trueans;
          echo "</td>";}
          ?>
      </table>

    </div>
  </body>


</html>
