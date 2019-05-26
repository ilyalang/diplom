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
  if ($true_ans == '') {unset($true_ans);} }
if (isset($_POST['false_ans']))
{
  $false_ans = $_POST['false_ans'];
  if($false_ans == '') {unset($false_ans);} }
if (isset($_POST['predobl']))
{
  $predobl = $_POST['predobl'];
  if ($predobl == '') {unset($predobl);}
}

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
  //занесение данных в базу 
    $result = mysqli_query($db, "INSERT INTO single_choice(name_sch_quest,text_sch_quest,id_obl,id_user) VALUES ('$name_quest','$text_quest',$predobl,1)");
    $latest_id = mysqli_insert_id($db);//получаем значение последнего ID
    $result2 = mysqli_query($db, "INSERT INTO answers_single(id_v,ans,yn_ans) VALUES ($latest_id,'$true_ans','YES')");
    foreach ($_POST['false_ans'] as $false_answer) {
      $result3 = mysqli_query($db, "INSERT INTO answers_single(id_v,ans,yn_ans) VALUES ($latest_id,'$false_answer','NO')");
      echo "INSERT INTO answers_single(id_v,ans,yn_ans) VALUES ($latest_id,'$false_answer','NO')"."<br>";
    }

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
    if ($result3=='TRUE'){
      echo "Данные успешно занесены";
    }
    else{
      echo "Данные не были внесены!";
    }

?>
