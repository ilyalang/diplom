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
  //foreach ($_POST["false_ans"] as $false_ans) {
//  implode($false_ans);
  if(isset($sumbit))
  {
    if(isset($name_quest) && isset($text_quest) && isset($true_ans) && isset($false_ans))
    {
      //foreach ($false_ans as $false) {
        echo $false . "<br />";
      $result = "INSERT INTO single_choice
      SET
        name_sch_quest = '".$_POST['name_quest']."',
        text_sch_quest = '".$_POST['text_quest']."'
      ";
      echo "Данные внесены";
  //}
    if ($result=='TRUE'){
      echo "Данные успешно занесены";
    }
    else{
      echo "Данные не были внесены!";
    }
  }
}

?>
