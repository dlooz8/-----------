<?php
	class User
	{
		public $name;
		private $age; // объявим возраст приватным 
		
		// Метод для чтения возраста юзера:
		public function getAge()
		{
			return $this->age;
		}
		
		public function setAge($age)
		{
			if ($this->isAgeCorrect($age)) {
				$this->age = $age;
			}
		}
		
		private function isAgeCorrect($age)
		{
			return $age >= 18 and $age <= 60;
		}
	}
?>

<!-- Вычисление факториала целого числа -->

<?php
class factorial_of_a_number
{
  protected $_n;
  public function __construct($n)
   {
     if (!is_int($n))
	   {
	      throw new InvalidArgumentException('Не число или отсутствующий аргумент');
       }
    $this->_n = $n;
	}
  public function result()
    {
     $factorial = 1;
     for ($i = 1; $i <= $this->_n; $i++)
	  {
	    $factorial *= $i;
      }
	   return $factorial;
	 }
 }

$newfactorial = New factorial_of_a_number(5);
echo $newfactorial->result();
?>

<!-- Calculator -->

<?php
class MyCalculator {
private $_fval, $_sval;
public function __construct( $fval, $sval ) {
$this->_fval = $fval;
$this->_sval = $sval;
}
public function add() {
return $this->_fval + $this->_sval;
}
public function subtract() {
return $this->_fval - $this->_sval;
}
public function multiply() {
return $this->_fval * $this->_sval;
}
public function divide() {
return $this->_fval / $this->_sval;
}
}
$mycalc = new MyCalculator(12, 6); 
echo $mycalc-> add()."\n"; // 18 
echo $mycalc-> multiply()."\n"; // 72
echo $mycalc-> subtract()."\n"; // 6
echo $mycalc-> divide()."\n"; // 2
?>

<!-- Cортировка упорядоченного целочисленного массива  -->

<?php
class array_sort
{
    protected $_asort;
    
    public function __construct(array $asort)
     {
        $this->_asort = $asort;
     }
    public function alhsort()
     {
        $sorted = $this->_asort;
        sort($sorted);
        return $sorted;
      }
}
$sortarray = new array_sort(array(17, -3, 5, 35, 0, 8, -9));
print_r($sortarray->alhsort())."\n";
?>