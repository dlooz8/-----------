<?php 
if (!isset($_POST['submit'])) {
?>
<form method="post" action="index.php">
    <p>Введите информацию:</p>
    Город: <input type="text" name="city" />
    Месяц: <input type="text" name="month" />
    Год: <input type="text" name="year" />
    <p>Пожалуйста, выберите погодные условия из списка: </p>
    <input type="checkbox" name="weather[]" value="Солнце" />Солнце<br />
    <input type="checkbox" name="weather[]" value="Облака" />Облака<br />
    <input type="checkbox" name="weather[]" value="Дождь" />Дождь<br />
    <input type="checkbox" name="weather[]" value="Снег" />Снег<br />
    <input type="checkbox" name="weather[]" value="Ветер" />Ветер<br />
    <input type="checkbox" name="weather[]" value="Холодно" />Холодно<br />
    <input type="checkbox" name="weather[]" value="Тепло" />Тепло<br />
    <input type="submit" name="submit" value="Вперёд" />
</form>
 
<?php
} else {
$inputLocal = array(
  $_POST['city'],
  $_POST['month'],
  $_POST['year']
);
echo "В городе $inputLocal[0] в месяце $inputLocal[1] в году $inputLocal[2], я наблюдал следующую погоду:<br /> <ul>";
if(!isset($_POST['weather'])) {
    echo "<li>Пожалуйста, выберите погодные условия</li>";
} else {
    $weather = $_POST['weather'];
    if(count($weather) == 1) {
        echo "<li>$weather[0]</li>";
    } else {
        foreach($weather as $w) {
            echo "<li>$w</li>";
        }
    }
}
echo "</ul>";
 
}
?>