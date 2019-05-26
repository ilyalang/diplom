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
        <div class="itm itm2"><a class="button" href="all_questions">Все вопросы</a></div>
        <div class="itm itm4"><a class="button" href="pred_obl">Предметные области</a></div>
        <div class="itm itm4"><a class="button" href="#">Управление пользователями</a></div>
    </div>
      </div>
      <div> 
      <table border="1"> 
        <tr> 
          <td> ID Пользователя </td>
          <td> ФИО Пользователя </td>
          <td> E-mail</td>
          <td> Город </td>
          <td> Учебное учреждение </td> 
          <td> Действия </td> 
        </tr>
        <?php 
        include ('../database/bd.php');
        $select = mysqli_query($db,"SELECT id_user,FIO,email,id_city,id_uch FROM `users`");
        while ($row = mysqli_fetch_array($select)){
          $id = $row['id_user'];
          $FIO = $row['FIO'];
          $email = $row['email'];
          $city = $row['id_city'];
          $uch = $row['id_uch'];
        echo "<tr>";
        echo "<td>" .$id. "</td>";
        echo "<td>" .$FIO. "</td>";
        echo "<td>" .$email. "</td>";
        echo "<td>" .$city. "</td>";
        echo "<td>" .$uch. "</td>";
        echo "</tr>";}
        ?>
      </table> 
      
      </div>
</body>
</html>
