<?php
function wmfunction($value,$key)
{
echo "$key : $value"."\n";
}
$a = '{"Заголовок": "Зов кукушки",
"Автор": "Роберт Гэлбрейт",
"Детали":
{ 
"Издатель": "Маленький Браун"
 }
  }';
$j1 = json_decode($a,true);
array_walk_recursive($j1,"wmfunction");
?>

<?php
$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

echo json_encode($arr);
?>

<!-- Получение JSON-представления значения -->

<?php
$arra = array("uglify-css"=> "1.3.4", "csshint"=> "0.9.1", "recess"=> "1.1.8" ,"connect"=> "2.1.3", "hogan.css"=>"2.0.0"); 
$myarray = array('red', 'green', 'white');
var_dump(json_encode($arra));
echo "<br>";
var_dump(json_encode($myarray));
?>

<!-- Отображение ошибок декодирования JSON -->

<?php
function json_error_message($json_str)
{
$json[] = $json_str;
echo $json;
foreach ($json as $string)
{
echo ' Декодирование: ' . $string."\n";
json_decode($string);

switch (json_last_error())
{
case JSON_ERROR_NONE:
echo ' - Без ошибок'."\n";
break;
case JSON_ERROR_DEPTH:
echo ' - Превышена максимальная глубина штабеля'."\n";
break;
case JSON_ERROR_STATE_MISMATCH:
echo ' - Отсутствие переполнения или несовпадение режимов'."\n";
break;
case JSON_ERROR_CTRL_CHAR:
echo ' - Обнаружен неожиданный управляющий символ'."\n";
break;
case JSON_ERROR_SYNTAX:
echo ' - Синтаксическая ошибка, искаженный JSON'."\n";
break;
case JSON_ERROR_UTF8:
echo ' - Неправильные символы UTF-8, возможно, неправильно закодированные'."\n";
break;
default:
echo ' - Неизвестная ошибка'."\n";
break;
}
}
}
json_error_message('{"color1": "Red Color"}');
?>

