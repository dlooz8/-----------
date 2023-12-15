<!-- Piramide -->

<?php
    $n=5;
    for($i=1; $i<=$n; $i++)
    {
    for($j=1; $j<=$i; $j++)
    {
    echo ' * ';
    }
    echo '<br>';
    }
    for($i=$n; $i>=1; $i--)
    {
    for($j=1; $j<=$i; $j++)
    {
    echo ' * ';
    }
    echo '<br>';
    }
?>

<!-- Создание таблицы умножения -->

<!DOCTYPE html>
<html>
<body>
<table align="left" border="1" cellpadding="3" cellspacing="0">
<?php
for($i=1;$i<=5;$i++)
{
echo "<tr>";
for ($j=1;$j<=5;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
  }
?>
</table>
</body>
</html>

