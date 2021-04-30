<?php 

// function
// function with parameters
// function with return value
// function argument by referance0
// variable function
// recursive function

function myFunction() {
	echo "Hello it's my first function in PHP <br>";
}

//myFunction();

function sum($num1, $num2) {
	$sum = $num1 + $num2;
	$div = $num1 / $num2;
	$sub = $num1 - $num2;
	$mul = $num1 . $num2;

	echo "The sum of $num1 and $num2 = $sum <br>";
	echo "The div of ".$num1. " and ".$num2." = ".$div. "<br>";
	echo "The sub of ".$num1. " and ".$num2." = ".$sub. "<br>";
	echo "The mul of ".$num1. " and ".$num2." = ".$mul. "<br>";
}

echo 'I am called a function below: <br>';
sum(20, 40);

echo "<br> <br> <br> <br>";

// function students($name, $class, $roll, $optSub) {
// 	echo "Name: $name <br>";
// 	echo "Class: $class <br>";
// 	echo "Roll: $roll <br>";
// 	echo "Optional Subject: $optSub <br> <br>";
// }

// students('Mike', 12, '02', 'Math');
// students('John', 11, '03', 'English');

//echo "<br> <br> <br> <br>";

function students($name, $class, $roll, $sub) {
	$info = "<h2> Name: $name <br> 
	Class: $class <br> Roll: $roll <br> 
	Subject: $sub</h2>";
	return $info;
}

$mike = students('Mike', 10, 01, "Math");
$john = students('John', 12, 02, 'English');
$smith = students('Smith', 12, 03, 'Accounting');

echo $mike;
echo $john;
echo $smith;

function sum02($math, $eng, $ict) {
	$sum = $math + $eng + $ict;
	return $sum;
}

function percentage($tn) {
	$toNum = $tn / 3;
	echo "The percentage is: ".$toNum;
}

$total = sum02(55, 65, 88);

percentage($total);


echo "<br> <br> <br> <br>";


function testing(&$string) {
	$string .= ' and it also another test';
}

$strn = 'This is a test';
testing($strn);
//echo $strn;

function first($value) {
	$value += 5;
}

function second(&$value) {
	$value += 5;

}

$number = 10;
first($number);
echo 'The original value is: '. $number."<br>";

$number02 = 20;
second($number02);
echo 'The changing number is: '.$number02;

echo "<br> <br> <br>";


function swap(&$arg1, &$arg2) {
	echo "inside function before swapping arg1 = $arg1, arg2 = $arg2 <br>";
	$temp = $arg1; // $temp = 10
	$arg1 = $arg2; // $arg1 = 20
	$arg2 = $temp; // $arg2 = 10
	echo "inside function after swapping arg1 = $arg1, arg2 = $arg2 <br>";
}

$arg1 = 10;
$arg2 = 20;

echo "before calling function arg1 = $arg1, arg2 = $arg2 <br>";
swap($arg1, $arg2);
echo "after calling function arg1 = $arg1, arg2 = $arg2 <br>";

echo "<br> <br> <br>";

$m = 10;
$n = 20;
$o = 30;
$arr = array($m, $n, $o);
for($i = 0; $i < 3; $i++) {
	$arr[$i]++;
	
} 
echo "$m $n $o";

echo "<br><br><br>";

$myFun = function($txt) {
	echo $txt;
};

$myFun('Hello World');

echo "<br> <br> <br>";

function test($number) {
	if($number <= 5) {
		echo $number."<br>";
		test($number+=1);
	}
}

test(1);

echo "<br><br><br>";

function factorial($n) {
	if($n == 0) {
		return 1;
	} else {
		return ($n * factorial($n - 1));
	}
}

echo factorial(5);

echo "<br><br><br>";

function address($name, $age, $sub, $con) {
	$cont = "<h2>
	Name: $name <br>
	Age: $age <br>
	Subject: $sub <br>
	Country: $con </h2>
	";

	return $cont;
}

$korim = address('Korim Benjema', 32, 'Football', 'France');
$kaka = address('Kaka', 42, 'football', 'Brazil');
echo $korim;
echo $kaka;
echo "<br><br><br>";
?>

<?php 

// function name($nam) {
// 	echo "hello $nam";
// };

// $name = "name";

// echo $name('john doe');



// factorial function

// function fact($num) {
// 	if($num == 0) {
// 		return 1;
// 	} else {
// 		$factNumber = ($num * fact($num - 1));
// 		return $factNumber;
// 	}
// }

// $result = fact(5);

// echo "The factorial number is: $result";

$num = 0;
$mul = 1;

for($i = 2; $i <= $num; $i++) {
	$mul = $mul * $i; 
}

echo "The factorial of $num is: $mul <br> <br>";


$num02 = 10;

function test1() {
	global $num02;
	echo "The variable inside function: $num02 <br>";
}

test1();
echo "The variable outside function: $num02";

?>
