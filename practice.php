<?php 

$color = array('color' => array('a' => 'Red', 'b' => 'Green', 'c' => 'White'),
                'numbers' => array(1,2,3,4,5,6),
                'holes' => array('First', 5 => 'Second', 'Third')
);

echo "Print Red: ".$color['color']['a']."<br><br>";
echo "Print Second: ".$color['holes'][5]."<br><br>";

function floorToDec($number, $precision, $separator) {
    $number_part = explode($separator, $number);
    //return 0123;
    $number_part[1] = substr_replace($number_part[1], $separator, $precision, 0);
    //return 01.23;
    if($number_part[0] >= 0) {
        $number_part[1] = floor($number_part[1]);
    } else {
        $number_part[1] = ceil($number_part[1]);
    }
    $ceil_number = array($number_part[0], $number_part[1]);
    return implode($separator, $ceil_number);

}

echo floorToDec(1.155, 2, '.')."<br>";
echo floorToDec(124.2345, 3, '.')."<br>";
echo floorToDec(-232.0123, 2, '.')."<br>";
echo "<br><br>";
$color = array();
echo "<br><br>";
$b = 3.2;
echo intval($b) . "<br>";

$c = "32.5";
echo intval($c) . "<br>";

$d = array();
echo intval($d) . "<br>";

$e = array("red", "green", "blue");
echo intval($e) . "<br>";

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
"Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
"United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=> "Valetta","Austria" => "Vienna", "Poland"=>"Warsaw") ;
$new_array = array_keys($ceu);
echo "The lergest key is: ".max($new_array)."<br>";


$n=range(11,20);
shuffle($n);
for($i=0; $i<10; $i++) {
    echo $n[$i]." ";
} echo "<br>";
$str = ["abcd","abc","de","hjjj","g","wer"];
$new_array = array_map('strlen', $str);
echo "The max number is: ".max($new_array)."<br>";
echo "The min number is: ".min($new_array)."<br>";

$num = range(200, 250, 4);
$display_number = implode($num, ", ");
echo $display_number;

$color = ['A' => 'Blue', 'B' => 'Green', 'C' => 'Red'];
function upper_to_lower($n){
    return strtolower($n);
}
$upperTOlower = array_map('upper_to_lower', $color);
echo "<pre>";
print_r($upperTOlower);
echo "</pre>";

$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");
function merge_array_by_index($x, $y){
    $temp = array();
    $temp[] = $x;
    if(is_scalar($y)){
        $temp[] = $y;
    } else {
        foreach($y as $k => $v) {
            $temp[] = $v;
        }
    }
    return $temp;
}
$merge = array_map('merge_array_by_index', $array1, $array2);
echo "<pre>";
print_r($merge);
echo "</pre>";

$temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 81, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
$month_temp = explode(',', $temp);
//$sum = array_sum($temp);
//$count = count($temp);
$avg = array_sum($month_temp) / count($month_temp);
echo "The average temperature is: ". $avg."<br>";
sort($month_temp);
echo "List of five lowest temperatures: ";
for($i=0; $i<5;$i++) {
    echo $month_temp[$i]." ";
}
echo "<br><br>";
$month_temp = explode(',', $temp);
rsort($month_temp);
$arrySort = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
asort($arrySort);
echo "List of five higest temperatures: ";
for($i=0; $i<5;$i++) {
    echo $month_temp[$i]." ";
}
echo "<br><br>";
echo "a. Assendign order sort by value: <br>";
foreach($arrySort as $arry_key => $arry_value) {
    echo "The age of $arry_key : $arry_value <br>";
}
echo "<br> <br>";

$arrySort = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
ksort($arrySort);

echo "b. Assendign order sort by key: <br>";
foreach($arrySort as $arry_key => $arry_value) {
    echo "The age of $arry_key : $arry_value <br>";
}
echo "<br> <br>";

$arrySort = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
arsort($arrySort);

echo "c. Dessendign order sort by value: <br>";
foreach($arrySort as $arry_key => $arry_value) {
    echo "The age of $arry_key : $arry_value <br>";
}
echo "<br> <br>";

$arrySort = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
krsort($arrySort);

echo "d. Assendign order sort by key: <br>";
foreach($arrySort as $arry_key => $arry_value) {
    echo "The age of $arry_key : $arry_value <br>";
}

$a = array('
{
    "dn": 10,
    "dnr" : 20 
},
{
    "dn": 30,
    "dnr" : 40 
},
{
    "dn": 50,
    "dnr" : 60 
},
{
    "dn": 70,
    "dnr" : 80 
},
{
    "dn": 90,
    "dnr" : 100 
}
');


$original = ['1','2','3','4','5'];
echo "Original array: ";
foreach($original as $value) {
    echo $value." ";
}

$inserted = "$";
array_splice($original, 3, 0, $inserted);
echo "After adding $ the array is: ";
foreach($original as $value) {
    echo $value." ";
}

echo "<br>";
$a = '{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail":
{ 
"Publisher": "Little Brown"
 }
  }';

$a1 = json_decode($a, true);
array_walk_recursive($a1, 'walkFunction');

function walkFunction($value, $key) {
    echo "$key : $value <br>";
}

$color = array(4 => 'white', 6 => 'green', 11=> 'red');

echo reset($color)."<br>";

$x = array(1, 2, 3, 4, 5);

var_dump($x);


unset($x[3]);

$x = array_values($x);

var_dump($x);



echo "<br>";
$ceu = array( 
"Italy"=>"Rome", 
"Luxembourg"=>"Luxembourg",
"Belgium"=> "Brussels", 
"Denmark"=>"Copenhagen", 
"Finland"=>"Helsinki", 
"France" => "Paris", 
"Slovakia"=>"Bratislava", 
"Slovenia"=>"Ljubljana", 
"Germany" => "Berlin", 
"Greece" => "Athens", 
"Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam", 
"Portugal"=>"Lisbon", 
"Spain"=>"Madrid", 
"Sweden"=>"Stockholm", 
"United Kingdom"=>"London", 
"Cyprus"=>"Nicosia", 
"Lithuania"=>"Vilnius",
"Czech Republic"=>"Prague", 
"Estonia"=>"Tallin", 
"Hungary"=>"Budapest", 
"Latvia"=>"Riga", 
"Malta"=>"Valetta", 
"Austria" => "Vienna", 
"Poland"=>"Warsaw") ;

foreach($ceu as $key => $value) {
    echo "The capital of $key is $value <br>";
}



$color = array('white', 'green', 'red');

foreach($color as $value) {
echo $value.', ';
}

echo "<ul>";
foreach($color as $value) {
echo "<li>". $value ."</li>";
}
echo "</ul>";
?>