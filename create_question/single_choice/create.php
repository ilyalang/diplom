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
  $true_ans = $_POST['true_ans'];
  if ($true_ans == '') {unset($text_quest);} }
if (isset($_POST['false_ans']))
{
  $false_ans = $_POST['false_ans'];
  if($false_ans == '') {unset($false_ans);} }

  if (empty($name_quest) or empty ($text_quest) or empty ($true_ans) or empty ($false_ans))
  {
    exit ("Вы ввели не всю информацию! Вернитесь назад и заполните всю информацию!");
  }
 //обработка
  $name_quest = stripslashes($name_quest);
  $name_quest = htmlspecialchars($name_quest);
  $text_quest = stripslashes($text_quest);
  $text_quest = htmlspecialchars($text_quest);
  $true_ans = stripslashes ($true_ans);
  $true_ans = htmlspecialchars ($true_ans);
  //подключение бд
  include ('../../database/bd.php');
  print_r($_POST);
  //внесение данных с формы в бд
    $result = mysqli_query($db,"INSERT INTO single_choice (name_singlech_quest, text_singlech_quest) VALUES ('$name_quest','$text_quest')");
    $result2 = mysqli_query($db,"INSERT INTO answers (ans,yn_ans) VALUES ('$true_ans',Y)");
    foreach ($false_ans as $key => $value) {
      $result3 = mysqli_query($db,"INSERT INTO answers (ans,yn_ans) VALUES ('$false_ans',N)");
    }
    echo $result3;
    /* foreach ($_POST['false_ans'] as $false_ans => $value) {
    $result3 = mysqli_query($db,"INSERT INTO answers (ans,yn_ans) VALUES ('$false_ans',N)");
  } */
//проверка на ошибки
if ($result=='TRUE'){
  echo "Данные успешно занесены";
}
else{
  echo "Данные не были внесены!";
}

?>
