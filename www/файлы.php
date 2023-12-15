<!-- Считываем из файла строку.  -->
<?php
$f = fopen("test.txt", "r");
$str = "";
while(!feof($f)){
    $str = fgets($f);
}
echo $str;
fclose($f);
?>

<!-- Читаем файл целиком -->

<?php
$data = file_get_contents(__DIR__ . '/file.txt');
echo $data;
?>

<!-- Запись в файл данных целиком -->

<?php
$data = 'abc' . PHP_EOL . 'def' . PHP_EOL;
file_put_contents(__DIR__ . '/file3.txt', $data);
?>

// Для дозаписи в конец файла следует использовать константу FILE_APPEND.

<?php
$data = 'abc' . PHP_EOL . 'def' . PHP_EOL;
file_put_contents(__DIR__ . '/file3.txt', $data, FILE_APPEND);

