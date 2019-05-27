<?php
if (isset($_POST['name_quest']))
{
  $name_quest = $_POST['name_quest'];
  if ($name_quest == '') {unset($name_quest); } }

if (isset($_POST['text_quest']))
{
  $text_quest = $_POST['text_quest'];
  if ($text_quest == '') {unset($text_quest); } }

if (isset($_POST['predobl'])){
    $predobl = $_POST['predobl'];
    if ($predobl == '') {unset($predobl);}
}

if (isset($_POST['comparison_ans']))
{
  $com_ans = $_POST['comparison_ans'];
  if ($com_ans == '') {unset($com_ans); } }

if (empty($name_quest) or empty($text_quest) or empty($predobl) or empty($com_ans)){
  echo "Вы ввели не все данные! Вернитесь и заполните все данные!";
}

$name_quest = stripslashes($name_quest);
$name_quest = htmlspecialchars($name_quest);
$text_quest = stripslashes($text_quest);
$text_quest = htmlspecialchars($text_quest);


include ('../../database/bd.php');

$result = mysqli_query($db, "INSERT INTO ordering_quest(name_order_quest,text_order_quest,id_obl,id_user) VALUES ('$name_quest','$text_quest',$predobl,1)");
$latest_id = mysqli_insert_id($db);
  foreach($_POST['comparison_ans'] as $comp_ans){
    $result2 = mysqli_query($db, "INSERT INTO answers_ordering(ans,por,id_v) VALUES ('$comp_ans',1,$latest_id)");
    echo "INSERT INTO answers_ordering(ans,por,id_v) VALUES ('$comparison_ans',1,$latest_id)";
  }
  if ($result=='TRUE'){
    echo "Данные успешно занесены";
  }
  else{
    echo "Данные не были внесены!";
  }
?>