<?php

// if a student get 80 to 100 number, get A+
// if a student get 70 to 79 number, get A
// if a student get 60 to 69 number, get A-
// if a student get 50 to 59 number, get B
// if a student get 40 to 49 number, get C
// if a student get 33 to 39 number, get D
// if a students number is less then 33 he/she considers as fail.

$num = 120;

if($num >= 80 && $num <= 100) {
	echo "Congratulation! You get A+";
} elseif($num >= 70 && $num < 80) {
	echo "Congratulation! You get A";
} elseif($num >= 60 && $num < 70) {
	echo "You get A-";
} elseif($num >= 50 && $num < 60) {
	echo "You get B";
} elseif($num >= 40 && $num < 50) {
	echo "You get C";
} elseif($num >= 33 && $num < 40) {
	echo "You get D";
} elseif($num < 33) {
	echo "Sorry! You are fail. Best of luck for next time";
} else {
	echo "Please enter valid number <br> <br> <br>";
}

$weekday = 70;

switch ($weekday) {
	case 1:
		echo 'Today is Saturday';
		break;
	case 2: 
		echo 'Today is Sunday';
		break;
	case 3: 
		echo 'Today is Monday';
		break;
	case 4:
		echo "Today is Tuesday";
		break;
	case 5:
		echo "Today is Wednesday";
		break;
	case 6:
		echo "Today is Thursday";
		break;
	case 7:
		echo "Today is Friday";
		break;
	default:
		echo 'Please enter a valid day';
}

?>