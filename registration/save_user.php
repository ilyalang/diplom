<?php
  if (isset($_POST['FIO']))
  {
    $FIO = $_POST['FIO'];
    if ($FIO == '') {unset($FIO); } } //заносим введенный пользователем ФИО, если поле пустое, то скрипт останавливается
  if (isset($_POST['email']))
  {
    $email = $_POST['email'];
    if ($email == '') {unset($email); } }

    //заносим введенный пользователем email, если поле пустое, то скрипт останавливается
    if (empty($FIO) or empty ($email)){
      exit ("Вы ввели не всю информацию! Вернитесь назад и заполните всю информацию!");
    }
    //Если логин и пароль введены, обрабатываем их
    $FIO = stripslashes($FIO);
    $FIO = htmlspecialchars($FIO);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
    //удаляем лишние пробелы
    $email = trim($email);
    //подключение к базе
    include ('../database/bd.php');
    //проверка на существование пользователя с таким-же $email
    $result = mysqli_query($db,"SELECT id_user FROM users WHERE email='$email'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id_user'])) {
      exit ("Извините, введённый вами email уже зарегестрирован. Введите другой email. ");
    }
    //если таких данных нет, то сохраняем данные в базу
    $result2 = mysqli_query($db,"INSERT INTO users (FIO,email) VALUES ('$FIO','$email')");
    //проверяем на ошибки
    if ($result2=='TRUE'){
      echo "Регистрация прошла успешно!Логин и пароль будут высланы вам на почту после подтверждения данных!";
    }
    else{
      echo "Произошла ошибка! Вы не были зарегестрированы!";
    }
  ?>
