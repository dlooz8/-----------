<?php
if (!isset($_POST['submit'])){
$travel=array(
  "автомобиль",
  "самолет",
  "паром",
  "метро"
); 
?>
 
<p>Путешествовать можно по городу, стране или миру. Вот список некоторых распространенных видов транспорта:</p>
<ul>
 
<?php
foreach ($travel as $t){
  echo "<li>$t</li>\n"; 
}
?>
 

</ul>
<form method="post" action="index.php">
<p>Добавьте свои любимые способы путешествия в список через запятую:</p>
<input type="text" name="added" size="80" />
<p />
 
<?php
foreach ($travel as $t){
  echo "<input type=\"hidden\" name=\"travel[]\" value=\"$t\" />\n";
}
?>
 
<input type="submit" name="submit" value="Вперёд" />
</form>
 
<?php
}else{
$travel=($_POST['travel']);
$added=explode(',',$_POST['added']);
 
array_splice($travel, count($travel), 0, $added);
 
echo "<p>Вот список ваших дополнений:</p>\n<ul>\n";
foreach($travel as $t){
  echo "<li>".trim($t)."</li>\n";  
}
echo"</ul>";  
 
?>
<p>Добавить еще?</p>
<form method="post" action="index.php">
<input type="text" name="added" size="80" />
<p />
<?php
foreach ($travel as $t){
  echo "<input type=\"hidden\" name=\"travel[]\" value=\"$t\" />\n";
}
?>
<input type="submit" name="submit" value="Go" />
</form>
<?php
}
?>