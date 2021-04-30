<?php

// count() , sizeof() & array_count_values 
// In_array() & array_search()
// array_replace & array_replace_recursive
// array_pop & array_push
// array_shift & array_unshift

$furits = ['apple','apple','apple','orange', '100','mango','banana','jackfruit'];
$len = count($furits);
echo "Count it using count function $len <br>";
$len02 = sizeof($furits);
echo "Count it using sizeof function $len02 <br>";

$webDev = [
	'fontend' => ['html', 'css', 'js'],
	'backend' => ['php', 'python', 'nodejs']
];

$item = in_array(100, $furits,true);

if($item) {
	echo "Yes boss! I find it";
} else {
	echo "Sorry boss! I can't find it";
}

echo "<br><br>";

$word = [
	['o', 'p'],
	['q', 'r'],
	't'
];

if(In_array(['t', 'p'], $word)) {
	echo 'Find sucessfully!';
} else {
	echo "Can't find";
}

echo "<br><br>";

$fruit = [
	'a' => 'apple',
	'b' => 'banana',
	'm' => 'mango'
];

echo array_search('apple', $fruit);

echo "<br><br>";

$batsman = ['tamim', 'r' => 'das', 'riyad', 'sakib'];
$bowler = ['m' => 'mostafiz', 'r' => 'rubel'];

//$team = array_replace($batsman, $bowler);


array_unshift($batsman, 'mushfiq', 'miton', 'muminul');
echo "<pre>";
print_r($batsman);
echo "</pre>";
?>





















