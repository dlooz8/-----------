<!-- Поменять местами первый и последний символы в заданной строке и вернуть новую строку. -->

<?php 
function test($str) 
{
   return strlen($str) > 1 ? substr($str, strlen($str) - 1).substr($str, 1, strlen($str) - 2). substr($str, 0, 1) : $str;
   
}

echo test("abcd")."\n";
echo test("a")."\n";
echo test("xy")."\n";
?>

<?php
//все прописные буквы
print(mb_strtoupper("быстрая рыжая лиса прыгает через ленивую собаку"))."<br>";
//все строчные буквы
print(mb_strtolower("БЫСТРАЯ РЫЖАЯ ЛИСА ПРЫГАЕТ ЧЕРЕЗ ЛЕНИВУЮ СОБАКУ"))."<br>";
// сделать первый символ строки из всех слов в верхнем регистре
print(mb_convert_case("быстрая рыжая лиса прыгает через ленивую собаку", MB_CASE_TITLE, "UTF-8"))."<br>";
?>

<?php
$str1= '073509'; 
echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n";
?>
Примечание: chunk_split — Разбивает строку на фрагменты
substr — Возвращает подстроку

<?php
$str1 = 'Каждый охотник желает знать';
if (strpos($str1,'охотник') !== false) 
 {
    echo 'Присутствует конкретное слово';
 }
else
 {
    echo 'Конкретного слова нет';
 }
?>

<!-- Извлеките имя файла из указанной строки -->

<?php
$path = 'wm-school.ru/php/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; // "index.php"
?>

<!-- Найдите первый символ, который отличается в двух строках -->

<?php
$str1 = 'wm-school';
$str2 = 'wm-schul';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('Первое различие между двумя строками в позиции %d: "%s" и "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");
?>

<!-- Получите шестнадцатеричный дамп строки -->

<?php
$str = 'wm-school@example.com';
echo bin2hex($str)."\n";
?>

<!-- Напечатайте буквы от 'a' до 'z' -->

<?php
for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);
 echo "\n"
?>

