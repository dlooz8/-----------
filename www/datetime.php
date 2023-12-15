<!-- Подсчитайте количество дней между текущим днем ​​и днем ​​рождения -->

<?php
$target_days = mktime(0,0,0,12,31,2000);// изменить день рождения 31.12.2000
$today = time();
$diff_days = ($target_days - $today);
$days = (int)($diff_days/86400);
print "До следующего дня рождения: $days дней!"."\n";
?>

<!-- Вывод текущей даты в указанном формате -->

<?php
echo date("Y/m/d") . "<br>";
echo date("y.m.d") . "<br>";
echo date("d-m-y")."<br>";
?>

<!-- Вычислите разницу между двумя датами (в годах, месяцах, днях) -->

<?php
$sdate = "1980-11-04";
$edate = "2021-04-04";

$date_diff = abs(strtotime($edate) - strtotime($sdate));

$years = floor($date_diff / (365*60*60*24));
$months = floor(($date_diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($date_diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

printf("%d лет, %d месяцев, %d дней", $years, $months, $days);
printf("\n");
?>

<!-- Проверьте, действительны ли указанные даты -->

<?php
var_dump(checkdate(2, 30, 2021));
var_dump(checkdate(2, 28, 2021));
?>

<!-- Получите разницу во времени в днях и годах, месяцах, днях, часах, минутах, секундах между двумя датами -->

<?php
$date1 = new DateTime('2019-03-01 02:12:51');
$date2 = $date1->diff(new DateTime('2021-03-12 11:10:00'));
echo $date2->days.' всего дней'."\n";
echo $date2->y.' года'."\n";
echo $date2->m.' месяцев'."\n";
echo $date2->d.' дней'."\n";
echo $date2->h.' часов'."\n";
echo $date2->i.' минут'."\n";
echo $date2->s.' секунд'."\n";
?>

<!-- Вычисление текущего возраста человека -->

<?php
$bday = new DateTime('11.4.1977'); // Ваша дата рождения
$today = new Datetime(date('m.d.y'));
$diff = $today->diff($bday);
printf('Ваш возраст: %d лет, %d месяцев, %d дней', $diff->y, $diff->m, $diff->d);
printf("\n");
?>

<!-- Выведите текущий месяц на русском языке -->

<?php
$_months = array(
"1"=>"Январь","2"=>"Февраль","3"=>"Март",
"4"=>"Апрель","5"=>"Май", "6"=>"Июнь",
"7"=>"Июль","8"=>"Август","9"=>"Сентябрь",
"10"=>"Октябрь","11"=>"Ноябрь","12"=>"Декабрь");
 
$month = $_months[date("n")]; 
echo $month;
?>

<!-- Получите количество дней в текущем месяце -->

<?php
echo 'Количество дней в месяце '.date('F'). ' составляет: ' .date('t')."\n";
?>

<!-- Преобразование строки в Date и DateTime -->

<?php
$dt = DateTime::createFromFormat('m-d-Y', '12-08-2020')->format('Y-m-d');
echo $dt;
?>