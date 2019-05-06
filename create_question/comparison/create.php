<?php
if (isset($_POST['name_quest_com']))
{
  $name_quest = $_POST['name_quest_com'];
  if ($name_quest == '') {unset($name_quest); } }
if (isset($_POST['text_quest']))
{
  $text_quest = $_POST['text_quest_com'];
  if ($text_quest == '') {unset($text_quest); } }
if (isset($_POST['true_ans']))
{
  $true_ans = $_POST['comparison_ans'];
  if ($true_ans == '') {unset($text_quest);} }

  if (empty($name_quest) or empty ($text_quest) or empty ($comparison_ans)) {
    exit ("Вы ввели не всю информацию! Вернитесь назад и заполните всю информацию!");
  }
 //обработка
  $name_quest = stripslashes($name_quest);
  $name_quest = htmlspecialchars($name_quest);
  $text_quest = stripslashes($text_quest);
  $text_quest = htmlspecialchars($text_quest);
  $comparison_ans = stripslashes ($comparison_ans);
  $comparison_ans = htmlspecialchars ($comparison_ans);
  //подключение бд
  include ('../../database/bd.php');
  //внесение данных с формы в бд
    $result = mysqli_query($db,"INSERT INTO comparison (name_quest_com, text_quest_com) VALUES ('$name_quest','$text_quest')");
//проверка на ошибки
if ($result=='TRUE'){
  echo "Данные успешно занесены";
}
else{
  echo "Данные не были внесены!";
}

?>
