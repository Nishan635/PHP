<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php exercises</title>
</head>
<body>
<style>
        body {
                margin-left: 40px;
        }
</style>
<?php 
// formatting function
function pre($var) {
        echo "<pre>";
        print_r($var);
        echo "</pre>";
}
// br function
function br() {
        echo "<br><br>";
}

// exercise no 3

$ceu = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", 
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", 
"France" => "Paris", "Slovakia"=>"Bratislava", 
"Slovenia"=>"Ljubljana", "Germany" => "Berlin", 
"Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", 
"Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", 
"United Kingdom"=>"London", "Cyprus"=>"Nicosia", 
"Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", 
"Estonia"=>"Tallin", "Hungary"=>"Budapest", 
"Latvia"=>"Riga", "Malta"=>"Valetta", 
"Austria" => "Vienna", "Poland"=>"Warsaw") ;
asort($ceu);
foreach($ceu as $country => $capital) {
        echo "The capital of <b>$country</b> is <b>$capital</b> <br>";
}
echo "<br><br>";

// exercise no 4

$x = array(1, 2, 3, 4, 5);
var_dump($x);
echo "<br>";
unset($x[3]);
var_dump($x);
echo "<br><br>";

//exercise no 5

$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo $color[4]; // print white
echo "<br><br>";

// exercise no 6

$json_datas = '{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}';

function json_decode_function($value, $index) {
        echo $index. " : ".$value. "<br>";
}

$a = json_decode($json_datas, true);
array_walk_recursive($a, 'json_decode_function');
echo "<br><br>";

// exercise no 7

$num = [1,2,3,4,5];
$sign = '$';

array_splice($num, 2, 0, $sign);
pre($num);
br();

// exercise no 8

$arr = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

function sort_value_and_key($arr) {
        foreach($arr as $key => $value) {
                echo "Age of $key is $value <br>";
        }
}
echo "ascending order sort by value: <br>";
asort($arr);
sort_value_and_key($arr);
echo "<br>";
echo "ascending order sort by Key: <br>";
ksort($arr);
sort_value_and_key($arr);
br();

$temperatures_str = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
$temperatures_arr = array_unique(explode(',', $temperatures_str));
pre($temperatures_arr);
echo "List of 5 sowest temperatures: ";
sort($temperatures_arr);
for($i = 0; $i < 5; $i++) {
        echo $temperatures_arr[$i]." ";
}
echo "<br>";
echo "List of five highest temperatures: ";
rsort($temperatures_arr);
for($i = 0; $i < 5; $i++) {
        echo $temperatures_arr[$i]." ";
}
echo "<br>";
$sum_temp = $temperatures_arr[0];
for($i = 1; $i < sizeof($temperatures_arr); $i++) {
        $sum_temp = $sum_temp + $temperatures_arr[$i];

}
echo "The average temp is: ".round($sum_temp/sizeof($temperatures_arr), 2);
br();

// exercise no 11

$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");

$newArray = array_merge($array1, $array2);
pre($newArray);

// exercise no 12

$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
echo "Value are in lowercase: ";
foreach($Color as $key => $value) {
        $value = strtolower($value);
        echo $key. " => " .$value.", ";
}
echo "<br>";
echo "Value are in uppercase: ";
foreach($Color as $key => $value) {
        $value = strtoupper($value);
        echo $key. " => " .$value.", ";
}
br();

for($i = 200; $i<=250; $i+=4) {
        echo $i.", ";
}
br();

// exercise no 14

$sample_array = ["abcd","abc","de","hjjj","g","wer"];

$num = array_map('strlen', $sample_array);
echo "The shortest number is: ".min($num)."<br>";
echo "The longest number is: ".max($num);
br();

$style_of_arr = [];
for($i = 0; $i < sizeof($sample_array); $i++) {
        $style_of_arr[] = strlen($sample_array[$i]);
}
echo "The shortest number is: ".min($style_of_arr)."<br>";
echo "The longest number is: ".max($style_of_arr);
br();

// exercise no 15

$n = range(10,20);
shuffle($n);
echo "The random number is: ";
for($i = 0; $i < 10; $i++) {
        echo $n[$i]." ";
}
br();

// exercise no 16

$name_number = ['john' => 78, 'hamadani' => 89, 'doe' => 77, 'mosh' => 68, 'smith' => 88];

$name_number_map = array_combine(array_keys($name_number), array_map('strlen', array_keys($name_number)));
 
$higest_key = implode(' ', array_keys($name_number_map, max($name_number_map)));

echo "The higest key of this array is: <b>$higest_key</b>";

br();

// $fav_color = ['red', 'green', 'blue', 'black', 'yellow'];

// // function longest_string_in_array($array) {    
// //   $mapping = array_combine($array, array_map('strlen', $array));     
// //   return array_keys($mapping, max($mapping));    
// // }

// // pre(longest_string_in_array($fav_color));

// $str_length = array_map('strlen', $fav_color);
// $new_array = array_combine($fav_color, $str_length);
// //pre($new_array);
// $again_arr = array_keys($new_array, max($new_array));
// echo implode(' ', $again_arr);

// exercise no 17

function min_value_not_zero($values) {
        return min(array_diff($values, array(0)));
}

print_r(min_value_not_zero(array(10,23,56,67,0)));
br();

// exercise no 17

function floorDec($number, $precision, $separator) {
        $number_part = explode($separator, $number);
        //return $number_part;
        $number_part[1] = substr_replace($number_part[1], $separator, $precision, 0);
        
        if($number_part[0] >= 0) {
                $number_part[1] = floor($number_part[1]); 
        } else {
                $number_part[1] = ceil($number_part[1]);
        }

        $ceil_number = [$number_part[0], $number_part[1]];
        $ceil_number = implode($separator, $ceil_number);
        return $ceil_number;
}

pre(floorDec(-2.555, 2, '.'))."<br>";
pre(floorDec(2.12345, 3, '.'))."<br>";
pre(floorDec(-5.1, 1, '.'));
br();

// exercise no 18

$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
"numbers" => array ( 1, 2, 3, 4, 5, 6 ),
"holes" => array ( "First", 5 => "Second", "Third"));

echo "It will print the 'red': ". $color['color']['a']."<br>";
echo "It will print 'second': ". $color['holes'][5];
br();

// exercise no 20

function cmp($a, $b) {
        global $order;
        foreach($order as $value) {
                if($a == $value) {
                        return 0;
                        break;
                } if($b == $value) {
                        return 1;
                        break;
                }
        }
}

$order = [5,4,3,2,1];
$arry = [5,3,4,2,1,2,5,3,4,2,1,2];
usort($arry, 'cmp');
foreach($arry as $value) {
        echo $value." ";
} 
br();

// exercise no 21

function sort_subnet($arry) {
        sort($arry);
        foreach($arry as $value) {
                echo $value."<br>";
        }
}

$subnet_list = 
array('192.169.12',
'192.167.11',
'192.169.14',
'192.168.13',
'192.167.12',
'122.169.15',
'192.167.16'
);
sort_subnet($subnet_list);
br();

// exercise no 22

// $arra[0]["transaction_id"] = "2025731470"; 
// $arra[1]["transaction_id"] = "2025731450"; 
// $arra[2]["transaction_id"] = "1025731456"; 
// $arra[3]["transaction_id"] = "1025731460"; 
// $arra[0]["user_name"] = "Sana"; 
// $arra[1]["user_name"] = "Illiya"; 
// $arra[2]["user_name"] = "Robin"; 
// $arra[3]["user_name"] = "Samantha"; 

$arra = [

        ["transaction_id" => "2025731470", "user_name" => "Sana"],
        ["transaction_id" => "2025731450", "user_name" => "Illiya"],
        ["transaction_id" => "1025731456", "user_name" => "Robin"],
        ["transaction_id" => "1025731460", "user_name" => "Samantha"]

];

function convert_timestrmp($timestamp) {
        $limit = date("U");
        $limiting = $timestamp - $limit;
        return date("Y-m-d", mktime(0,0,$limiting));
}

usort($arra, function($a, $b) {
        $k = convert_timestrmp($a["transaction_id"]);
        $l = convert_timestrmp($b["transaction_id"]);
        $m = strcmp($l, $k);
        $m .= strcmp($a['user_name'], $b['user_name']);
        return $m;
});

// while (list ($key, $value) = each ($arra)) { 
//     echo "\$arra[$key]: "; 
//     echo $value["transaction_id"]; 
//     echo " user_name: "; 
//     echo $value["user_name"]; 
//     echo "<br>"; 
// } 

// exercise no 23

$emps = [
        [
                'name' => 'Sana',
                'email' => 'sana@example.com',
                'phone' => '95867577',
                'country' => 'UK'
        ],
        [
                'name' => 'Robin',
                'email' => 'robin@example.com',
                'phone' => '95867485',
                'country' => 'USA'
        ],

        [
                'name' => 'Sofia',
                'email' => 'sofia@example.com',
                'phone' => '9584857',
                'country' => 'Bangladesh'
        ]

        ];
usort($emps, function($a, $b) {
        return strcmp($a['name'], $b['name']);
});
pre($emps);
br();

// exercise no 24

$colors = ['color2', 'color4', 'color1', 'color22', 'color10'];
natsort($colors);
foreach($colors as $value) {
        echo $value."<br>";
}
br();

// exercise no 26

function suffle_assoc($arr) {
        $keys = array_keys($arr);
        shuffle($keys);
        foreach($keys as $value) {
                $new[$value] = $arr[$value];
        }
        $arr = $new;
        return $arr;
}

pre(suffle_assoc(array('one' => 'red', 'two' => 'green', 'three' => 'blue')));
br();

// exercise no 27

function rand_pass($upper=2, $lower=4, $num=2, $other=2) {
        $pass_order = [];
        for($i = 0; $i < $upper; $i++) {
                $pass_order[] = chr(rand(65, 90));
        }
        for($i = 0; $i < $lower; $i++) {
                $pass_order[] = chr(rand(97, 122));
        }
        for($i = 0; $i < $num; $i++) {
                $pass_order[] = chr(rand(48, 57));
        }
        for($i = 0; $i < $other; $i++) {
                $pass_order[] = chr(rand(33, 47));
        }
        shuffle($pass_order);
        $final_pass = implode('', $pass_order);
        return $final_pass;
}

echo rand_pass()."<br>";
echo rand_pass()."<br>";
echo rand_pass()."<br>";
br();

// exercise no 28
echo "exercise no 28-30 // do it latter";
br();

// exercise no 31

$value = ['value1' => 200, 'value2' => 100, 'value3' => 400, 'value4' => 50, 'value5' => 80];
arsort($value);
echo "The index of higest value: ".key($value);
br();

// exercise no 32

function name_of_file($file) {
        $file = strtolower(trim($file));
        $file_ext = explode('.', $file);
        $end = end($file_ext);
        return $end;
} 

echo name_of_file('index.html')."<br>";
echo name_of_file('array exercise . PHP')."<br>";
echo name_of_file('style.css');
br();

// exercise no 35

$color = ['black ', ' green', ' blue '];
array_walk($color, function(&$value) {
        $value = trim($value);
});
pre($color);
br();

// exercise no 36

$color = ['Red', 'Yellow', 'Pink'];
array_walk($color, function($value) {
        $value = strtolower($value);
        echo $value."<br>";
});

$lower_colors = array_map('strtolower', $color);
pre($lower_colors);
$upper_colors = array_map('strtoupper', $color);
pre($upper_colors);
br();

// exercise no 37

function count_spe_value($arr, $item) {
        $count = 0;
        foreach($arr as $key => $value) {
                if($value == $item) {
                        $count++;
                }
        }
        return $count;
}

$c = ['c1' => 'Red', 'c2' => 'Green', 'c3' => 'Yellow', 'c4' => 'Red', 'c5' => 'Red'];
echo "The Red in the array is: " .count_spe_value($c, 'Red')." times";
br();

// exercise no 38

$studenst = [
        0 => ['city_id' => 1, 'name' => 'Sara', 'mobile_num' => '1111111111'],
        1 => ['city_id' => 2, 'name' => 'Robin', 'mobile_num' => '222222222'],
        2 => ['city_id' => 1, 'name' => 'Sonia', 'mobile_num' => '333333333']
];

// exercise no 39

$colors = ["Red", 'Green', 'Blue', 'Red'];
pre(array_flip($colors));
$numbers = [100, -30, 200, 100, 500];

pre(array_keys(array_flip($numbers)));

// exercise no 41

function email_not_unique($email) {
        natcasesort($email);
        $same = [];
        $old_key = NULL;
        $old_value = NULL;
        foreach($email as $key => $value) {
                if($old_value == $value) {
                        $same[$old_key] = $old_value;
                        $same[$key] = $value;
                } else {
                        $old_value = $value;
                        $old_key = $key;
                }
        }
        return $same;        
}

$email = ['xyz@example.com', 'dse@exaple.com', 'mno@exaple.com', 'xyz@example.com'];
pre(email_not_unique($email));
?>
</body>
</html>