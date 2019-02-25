<form method="POST" name="answers">

<input type="radio" name="ans" for="ans1"> <input type="text" for="ans1"> <br> <br>
<input type="radio" name="ans" for="ans2"> <input type="text" for="ans2"> <br> <br>
<input type="radio" name="ans" for="ans3"> <input type="text" for="ans3"> <br> <br>
<input type="radio" name="ans" for="ans4"> <input type="text" for="ans4">
<br> <br>
<input type="submit" name="submit">
</form>

<?php
if (isset ($_POST['ans'])) {
$mysqli = new mysqli('localhost', 'root','', 'voprosnik');
$predmet_obl = "SELECT * FROM pred_obl";
mysqli_query($mysqli,"SET NAMES 'utf8'");
$result_select = mysqli_query($mysqli,$predmet_obl);
$ans = $_POST['ans'];
$result = mysqli_query($mysqli,"INSERT INTO success_ans (text_sa,id_quest) VALUES ('$ans',1)");
if($result == 'true'){
  echo "Ваши данные успешно добавлены";
}
else{
  echo "Ваши данные не отправлены!". mysqli_error($mysqli) ;
}
}

?>
