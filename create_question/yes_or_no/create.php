<?php
if (isset($_POST['name_quest']))
{
  $name_quest = $_POST['name_quest'];
  if ($name_quest == '') {unset($name_quest); } }
if (isset($_POST['text_quest']))
{
  $text_quest = $_POST['text_quest'];
  if ($text_quest == '') {unset($text_quest); } }
if (isset($_POST['true_ans']))
{
  $yon_true_ans = $_POST['yon_true_ans'];
  if ($yon_true_ans == '') {unset($yon_true_ans);} }

  if (empty($name_quest) or empty ($text_quest) or empty ($yon_true_ans)) {
    exit ("Вы ввели не всю информацию! Вернитесь назад и заполните всю информацию!");
  }
 //обработка
  $name_quest = stripslashes($name_quest);
  $name_quest = htmlspecialchars($name_quest);
  $text_quest = stripslashes($text_quest);
  $text_quest = htmlspecialchars($text_quest);
  $yon_true_ans = stripslashes ($yon_true_ans);
  $yon_true_ans = htmlspecialchars ($yon_true_ans);
  //подключение бд
  include ('../../database/bd.php');
  //внесение данных с формы в бд
    $result = mysqli_query($db,"INSERT INTO yes_or_no (name_quest, text_quest,yon_true_ans) VALUES ('$name_quest','$text_quest','$yon_true_ans')");
//проверка на ошибки
if ($result=='TRUE'){
  echo "Данные успешно занесены";
}
else{
  echo "Данные не были внесены!";
}

?>
