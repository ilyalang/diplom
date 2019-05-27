<?php
if (isset($_POST['name_quest']))
{
  $name_quest = $_POST['name_quest'];
  if ($name_quest == '') {unset($name_quest); } }
if (isset($_POST['text_quest']))
{
  $text_quest = $_POST['text_quest'];
  if ($text_quest == '') {unset($text_quest); } }
if (isset($_POST['text_ans']))
{
  $text_ans = $_POST['text_ans'];
  if ($text_ans == '') {unset($text_ans);} }
if (isset($_POST['ans']))
{
  $ans = $_POST['ans'];
  if ($ans == '') {unset($ans);} }
if (isset($_POST['predobl'])){
    $predobl = $_POST['predobl'];
    if ($predobl == '') {unset($predobl);}
}
  
  if (empty($name_quest) or empty ($text_quest) or empty ($text_ans) or empty ($predobl)){ //empty ($ans) ) {
    exit ("Вы ввели не всю информацию! Вернитесь назад и заполните всю информацию!");
  }
 //обработка
  $name_quest = stripslashes($name_quest);
  $name_quest = htmlspecialchars($name_quest);
  $text_quest = stripslashes($text_quest);
  $text_quest = htmlspecialchars($text_quest);
  //подключение бд
  include ('../../database/bd.php');
  //внесение данных с формы в бд
    $result = mysqli_query($db, "INSERT INTO comparison(name_quest_com,text_quest_com,id_user,id_obl) VALUES ('$name_quest', '$text_quest',1,$predobl)");
    $latest_id = mysqli_insert_id($db);
    foreach ($_POST['ans'] as $value) {$getans .= $value;}
    foreach ($_POST['text_ans'] as $text_answer){
      $result2 = mysqli_query($db, "INSERT INTO answers_comparison(text_ans,true_ans,id_v) VALUES ('$text_answer','$getans',$latest_id)");
  }
//проверка на ошибки
if ($result=='TRUE'){
  echo "Данные успешно занесены";
}
else{
  echo "Данные не были внесены!";
}
if ($result2=='TRUE'){
  echo "Данные успешно занесены";
}
else{
  echo "Данные не были внесены!";
}

?>
