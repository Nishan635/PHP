<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Function</title>
</head>
<style>
	table, tr , td, th {
		border: 1px solid black;
		border-collapse: collapse;
		padding: 10px;
	}
	li {
		margin-top: -10px;
	}
</style>
<body>
	<?php
// count() , sizeof() & array_count_values
// In_array() & array_search()
// array_replace & array_replace_recursive
// array_pop & array_push
// array_shift & array_unshift
// array_merge
// array_merge_recursive
// array_combine
// array_slice
// array_splice
// array_keys
// array_key_exists
// array_intersect
// array_intersect_key
// array_intersect_assoc
// array_diff
// array_diff_key
// array_diff_assoc
// array_values
// array_unique
// array_column
// array_chunk
// array_flip
// array_change_key_case
// array_sum
// array_product
// array_rand
// shuffle
// array_fill_keys
// array_fill
// array_walk
// array_walk_recursive
// array_map
// array_reduce
// sort
// rsort
// asort => use for associative array
// arsort => use for associative array
// ksort => use for key sorting in assending order
// krsort => use for key sorting in desending order
// natsort
// natcasesort
// array_multisort
// array_reverse


$food = ['orange','apple','carrot', 'bulbo'];
$veggi = ['carrot', 'bulbo'];

$aryReverce = array_reverse($food);

echo "<pre>";
print_r($aryReverce);
//print_r($veggi);
echo "</pre>";

$img = ['Img12.png', 'img10.png','Img8.png','img04.png', 'img01.png'];

natcasesort($img);

echo "<pre>";
print_r($img);
echo "</pre>";

$food = [
	'd' => 'rice',
	'e' => 'brade',
	'c' => 'apple',
	'a' => 'mango',
	'b' => 'banana'
];

krsort($food);

echo "<pre>";
//print_r($food);
echo "</pre>";



$indexFsort = [1,23,4,5,45,5,4,5,];
$fruitFsort = ['apple','mango','orange','pinaapple','licue','watermalone'];
sort($indexFsort);
echo "<pre>";
//print_r($indexFsort);
echo "</pre>";

function arryReduceFun($carry, $num) {
	$carry*=$num;
	return  $carry;
}

$num02 = [10,20,30,40,50];

$sumByReduce = array_reduce($num02, 'arryReduceFun', 1);

echo "<pre>";
print_r($sumByReduce);
echo "</pre>";


function reduceFun($carry,$txt) {
	return $carry. ' - ' .$txt.'<br>';
}

$FavFruits = ['apple', 'mango', 'orange'];

$ary_redice = array_reduce($FavFruits, 'reduceFun', 20);

echo "<pre>";
print_r($ary_redice);
echo "</pre>";

function anoFun($txt) {
	return strtoupper($txt);
}

$mul_dimen = [
	'a' => 'html',
	'b' => 'c programming',
	'c' => 'javascript'
];

$ary_map_mul = array_map('anoFun', $mul_dimen);

echo "<pre>";
print_r($ary_map_mul);
echo "</pre>";

function map($num, $txt) {
	return [$num => $txt];
}

$num01 = [1,2,3,4,5];
$furits_name = ['apple','orange','banana','mango','graps'];

$arry_map = array_map('map', $num01, $furits_name);

echo "<pre>";
print_r($arry_map);
echo "</pre>";

$fav_pro_lang = [
	'lib' => [
		'1' => 'larabel',
		'2' => 'bootstrap'
	],
	'a'=>'c programming', 'b' => 'PHP', 'c' => 'javaScript', 'd' => 'ruby'
];

array_walk_recursive($fav_pro_lang, 'myFun', 'is my favarite language');

function myFun($a, $b, $c) {
	echo "$b : $a $c <br>";
}

$ary_fill = array_fill(5, 10, 'PHP'); 

$name_alp = ['a', 'b', 'c', 'd', 'e'];
$ary_fill_key = array_fill_keys($name_alp, 'PHP');

echo "<pre>";
print_r($ary_fill);
echo "</pre>";
echo "<pre>";
print_r($ary_fill_key);
echo "</pre>";

$name_pro = ['c', 'js', 'php', 'python', 'ruby'];
$name_rand = array_rand($name_pro, 3);

echo "<pre>";
print_r($name_rand);
echo "</pre>";

foreach($name_rand as $name_value) {
	echo "<ul>";
	echo "<li>".$name_pro[$name_value]."</li>";
	echo "</ul>";
}

$asso_name = ['mosh' => 'php', 'doe' => 'css', 'harry' => 'php', 'smith' => 'html', 'george' => 'github'];

$asso_rand = array_rand($asso_name, 3);

echo "<pre>";
print_r($asso_rand);
echo "</pre>";

foreach($asso_rand as $asso_value) {
	echo "<ul>";
	echo "<li>".$asso_name[$asso_value]."</li>";
	echo "</ul>";
}

//$ary01 = ['mosh' => 'php', 'doe' => 'css', 'harry' => 'php', 'smith' => 'html', 'george' => 'github'];
//$colors = ['a' => 'red', 'b' => 'green', 'c' => 'blue', 'd' => 'yellow', 'e' => 'pink'];
//$rand_keys = array_rand($ary01, 2);

 echo '<pre>';
// print_r($rand_keys);
 echo '</pre>';

//foreach ($rand_keys as $key) {
    //echo $ary01[$key] . "<br>";
//}

//$color = ['red', 'green', 'blue', 'skyblue', 'yellow', 'purple', 'gray', 'tomato'];
//$ary01 = ['mosh' => 'php', 'doe' => 'css', 'harry' => 'php', 'smith' => 'html', 'george' => 'github'];

 //$rand_key = array_rand($ary01,3);

// echo '<pre>';
// print_r($rand_key);
// echo '</pre>';

// foreach($rand_key as $key) {
// 	echo $key."<br>";
// }
// shuffle($color);

// echo '<pre>';
// print_r($color);
// echo '</pre>';


// for($i = 0; $i < count($arryRand); $i++) {
// 	echo "<h1>".$color[$arryRand[$i]]."</h1>";
// }

// echo "<h1>$color[$arryRand[1]]</h1>";
// echo "<h1>$color[$arryRand[2]]</h1>";
$num = [10,20,30,40,50];

$newArry = array_product($num);

$name = [
	'bill' => 10,
	'joe' => 20,
	'petter' => 30
];

//$newArry = array_change_key_case($name, CASE_UPPER);

echo "<pre>";
//print_r($newArry);
echo "</pre>";
// multidimensional array

$multiDime = [
	[1, 'john', 'php', '30,000'],
	[2, 'smith', 'js', '40,000'],
	[3, 'doe', 'wordpress', '20,000'],
	[4, 'mosh', 'css', '40,000']
];

echo "<table>";
foreach($multiDime as $v1) {
	echo "<tr>";
	foreach($v1 as $v2) {
		echo '<td>'. $v2 .'</td>';
	}
	echo "</tr>";
};
echo "</table>";

$marks = [
	'Krishna' => [
		'roll' => '245',
		'bangla' => 89,
		'english' => 80,
		'math' => 95
	],
	'mohan' => [
		'roll' => '246',
		'bangla' => 78,
		'english' => 60,
		'math' => 55		
	],
	'belal' => [
		'roll' => '247',
		'bangla' => 72,
		'english' => 90,
		'math' => 100
	]
];
echo "<br>";
echo "<table>";
echo "<tr>
<th>Name</th>
<th>Roll</th>
<th>Bangla</th>
<th>English</th>
<th>Math</th>
</tr>";
foreach($marks as $key => $row) {
	echo "<tr>
	<td>$key</td>
	";
	foreach($row as $col) {
		echo "<td> $col </td>";
	}
	echo "</tr>";
}
echo "</table>";
echo "<br>";

$arrayColumn = array_column($marks, 'english', 'roll');
echo "<pre>";
print_r($arrayColumn);
echo "</pre>";

//$color = ['red', 'green', 'blue', 'skyblue', 'yellow', 'purple', 'gray', 'tomato'];
//$arrayChank = array_chunk($marks, 3, true);
$arrayChank = array_values($color);
echo "<pre>";
//print_r($arrayChank);
echo "</pre>";

// echo "<table>";
// for($i = 0; $i < count($multiDime); $i++) {
// 	echo "<tr>";
// 	for($j = 0; $j < count($multiDime[$i]); $j++) {
		
// 		echo "<td>".$multiDime[$i][$j]."</td>";
// 	}
// 	echo "</tr>";
// }
// echo "</table>";

$ary01 = ['mosh' => 'php', 'doe' => 'css', 'harry' => 'php', 'smith' => 'html', 'george' => 'github'];
$ary02 = ['hitesh' => 'javascript', 'mosh' => 'wp', 'smith' => 'html', 'harry' => 'wp'];

$newArray = array_unique($ary01);

//$newArray = array_diff_assoc($ary01, $ary02);

echo "<pre>";
//print_r($newArray);
echo "<pre>";



// finding common value
//$newArray = array_intersect($ary01, $ary02);
// finding commun key
//$newArray = array_intersect_key($ary01, $ary02);
// finding commun value and key
//$newArray = array_intersect_assoc($ary01, $ary02);

// $newArray = array_uintersect($ary01, $ary02, 'compare');

// function compare($a, $b) {
// 	if($a === $b) {
// 		return 0;
// 	} else {
//     return ($a > $b)? 1 : -1;
//   } 
	
// }

// echo '<pre>';
// print_r($newArray);
// echo '</pre>';


$colors = ['red','green','blue','yellow','black'];
$fav = ['a' => 'john','b' => 'doe','c' => 'smith'];

$arrayKeys = array_key_exists('a', $fav);

if($arrayKeys) {
	echo "array key exists <br>";
} else {
	echo "array key doesn't exist <br>";
}

// echo "<pre>";
// print_r($arrayKeys);
// echo "</pre>";

$name = ['john', 'doe', 'smith', 'mosh'];
$age = [30,45,35,40];
$nameAndage = array_combine($name, $age);

foreach($nameAndage as $key => $value) {
	echo "$key => $value <br>";
}
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

</body>
</html>