<?php
  session_start();
if (isset($_POST['login'])) {$login = $_POST['login']; if ($login=='') {unset($login); } }
if (isset($_POST['password'])) {$password = $_POST['password']; if ($password=='') {unset($password); } }
if (empty($login) or empty($password)) {exit ("Вы ввели не всю информацию. Вернитесь назад и заполните всю информацию"); }

$login = stripslashes($login);
    $login = htmlspecialchars($login);
$password = stripslashes($password);
    $password = htmlspecialchars($password);
//удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
// подключаемся к базе
    include ("database/bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь

$result = mysqli_query($db,"SELECT * FROM users WHERE login='$login'"); //извлекаем из базы все данные о пользователе с введенным логином
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['password']))
    {
    //если пользователя с введенным логином не существует
    exit ("Извините, введённый вами login или пароль неверный.");
    }
    else {
    //если существует, то сверяем пароли
    if ($myrow['password']==$password) {
    //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
    $_SESSION['login']=$myrow['login'];
    $_SESSION['id_user']=$myrow['id_user'];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
    echo "Вы успешно вошли на сайт! <a href='index.php'>Главная страница</a>";
    }
 else {
    //если пароли не сошлись

    exit ("Извините, введённый вами login или пароль неверный.");
    }
    }
?>
