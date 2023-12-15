<?php
echo "Ассоциативный массив: сортировка по возрастанию по значению <br>";
$array2=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
asort($array2);
foreach($array2 as $y=>$y_value)
{
echo "Возраст ".$y." составляет: ".$y_value."<br>";
}
echo "Ассоциативный массив: сортировка по ключу в порядке возрастания <br>";
$array3=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
ksort($array3);
foreach($array3 as $y=>$y_value)
{
echo "Возраст ".$y." составляет : ".$y_value."<br>";
}
echo "Ассоциативный массив: сортировка по убыванию по значению <br>";
$age=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
arsort($age);
foreach($age as $y=>$y_value)
{
echo "Возраст ".$y." составляет : ".$y_value."<br>";
}
echo "Ассоциативный массив: сортировка по убыванию по ключу <br>";
$array4=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
krsort($array4);
foreach($array4 as $y=>$y_value)
{
echo "Возраст ".$y." составляет : ".$y_value."<br>";
} 
?>