<?php
 $name = 'Mosh Hamadani';
 $age = 23;
 $nation ='Egypt';
 $mob = '2345642';
 $pro = 'Instractor';

 echo 'My name is '.'<b>'.$name.'</b>'.'<br>';
 echo 'I am '.'<b>'.$age.'</b>'.' years old'. '<br>';
 echo 'I am an '.'<b>'.$pro.'</b>'.'<br>';
 echo 'I living in '.'<b>'.$nation.'</b>'.'<br>';
 echo 'Mobile: '.'<b>'.$mob.'</b>'.'<br>'.'<br>';

?>

<?php
 	// constant variables
	// define(variable, value, case)
	// dont need to use $
	define('name', 'Mosh Hamadani');
	echo name. "<br>";
	define('num1', 121);
	echo num1."<br>";
?>

<?php
// comparison operator
// === equal value and equal type
// !== not equal value or not equal type

// *** comparison operator ***
$age = 25;


if ($age >= 18 xor $age <= 30) {
	echo "You're eligible <br>";
} else {
	echo "You're not eligible <br>";
}
// Ternary operator

$name = 'Mosh';
$z = $name == 'Mosh' ? "True <br>" : "false <br>";
echo $z."<br><br>";

for($i = 1; $i <= 100; $i+=10) {
	for($j = $i; $j < $i + 10; $j++) {
		echo $j. ' ';
	}
	echo "<br>";
}

echo "<br><br><br>";
// string operator

$text1 = "Hello World";
$text1 .= ' I am a student. ';
$text1 .= 'I read in Honours 2nd years in Management';
$text2 = $text1. ' I am learning PHP';


// *** LOOP *** 
// while loop 
// do while loop
// for loop
// continue and break statement
// goto statement

for($i = 2; $i <= 10; $i+=2) {
	if($i == 8) {
		goto label;
	}
	echo $i."<br>";
}

label: 
for($j = 10; $j <= 18; $j+=2) {
	echo $j."<br>";
}

echo "<br> <br> <br>";

for($a = 1; $a <= 100; $a+=10) {
	for($b = $a; $b < $a + 10; $b++) {
		echo $b.' ';
	}
	echo '<br>';
}

	

?>