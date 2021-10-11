<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP array</title>
        <style>
                body {
                        margin-left: 40px;
                }
                table, td, th {
                        border: 1px solid rgba(0,0,0,0.4);
                        border-collapse: collapse;
                        padding: 8px;
                }
        </style>
</head>
<body>
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

// array in basic

$intro = ['Mosh Hamadani', 20, 'eleven', 20.34];

echo "<ul>";
foreach($intro as $value) {
        echo "<li> $value </li>";
}
echo "</ul>";

// associative array

$name = ['name' => 'John Doe', 'age' => 35, 'fav' => 'PHP']; // here 'name' called key & 'John Doe' called value
$name['name'] = 'Mosh Hamadani';
echo "<pre>";
var_dump($name);
echo "</pre>";
echo $name['name'];
echo "<br><br>";
// foreach loop

foreach($name as $key => $value) {
        $key = strtoupper($key);
        echo "$key = $value <br>";
} 
echo "<br><br>";

// multidimensonal array

$details = [
        ['Mosh', 'PHP', 'Egypt', 50],
        ['John', 'Phyton', 'USA', 150],
        ['Smith', 'Java', 'Canada', 250],
        ['Doe', 'JavaScript', 'UK', 210]
];

// print multidimensoanl array using for loop 

echo "<table>";
echo "<caption></h4>Using for loop</h4></caption>";
echo "<tr>
<th>Name</th>
<th>F Langunge</th>
<th>Country</th>
<th>Salary</th>
</tr>
";
for($i = 0; $i < sizeof($details); $i++) {
        echo "<tr>";
        for($j = 0; $j < sizeof($details); $j++) {
                echo "<td>". $details[$i][$j] ."</td>";
        }
        echo "</tr>";
}
echo "</table> <br>";

// print multidimensonal array using foreach loop

echo "<table>";
echo "<caption><h4>Using foreach loop</h4></caption>";
echo "<tr>
<th>Name</th>
<th>F Langunge</th>
<th>Country</th>
<th>Salary</th>
</tr>
";
foreach($details as $i) {
        echo "<tr>";
        foreach($i as $j) {
                echo "<td>".$j."</td>";
        }
        echo "</tr>";
}
echo "</table>";
echo "<br>";

// multidimensional associative array

$marks = [
        'john' => [
                'physics' => 85,
                'chemistry' => 75,
                'math' => 60
        ],
        'smith' => [
                'physics' => 72,
                'chemistry' => 82,
                'math' => 75
        ],
        'mosh' => [
                'physics' => 70,
                'chemistry' => 80,
                'math' => 81
        
        ],
        'doe' => [
                'physics' => 97,
                'chemistry' => 72,
                'math' => 86
        ],
        'hamadani' => [
                'physics' => 100,
                'chemistry' => 100,
                'math' => 100
        ]
                
];

// print multi - D assositive array with foreach loop

echo "<table>";
echo "<caption><h4>print multi - D assositive array with foreach loop</h4></caption>";
echo "<tr>
<th>Name</th>
<th>Physics</th>
<th>Chemistry</th>
<th>Math</th>
<th>Total</th>
</tr>
";
echo "<tr>";
foreach($marks as $key => $value) {
        $key = strtoupper($key);
        echo "<td>".$key."</td>";
        $sum = 0;
        foreach($value as $value2) {
                echo "<td>".$value2."</td>";
                $sum = $sum + $value2; // add all numbers
        }
        echo "<td>".$sum."</td>"; // print add numbers
        echo "</tr>";
}
echo "</table> <br><br>";

// print 1 to 100 in table
echo "<table>";
for($i = 1; $i<=100; $i+=10) {
        echo "<tr>";
        for($j = $i; $j < $i + 10; $j++) {
                echo "<td>". $j."</td>";
        }
        echo "</tr>";
}
echo "<table>";
echo "<br><br>"; 

// array function

//$arr = ['mango', 'banana', 'orange', 'guyaba', 'pinaapple', 'apple'];
//$arr = [10,12,1,34,22,2.3];
$arr = ['z' => 'pple', 'f' => 'all', 'a' => 'ct', 'g' => 'doll', 'h' => 'gg'];
ksort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";
krsort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

// array_walk

$arr = [1,3,5,6,7,10];
echo "<pre>";
print_r($arr);
echo "</pre>";
array_walk($arr, 'sum');
function sum($value, $index) {
        echo $value ." , ". $index."<br>";
}
echo "<br><br>";
function ref_function(&$value, $index) {
        $value = $value * 10;
}
$arr_num = ['first' => 20, 'second' => 30, 'third' => 40];
array_walk($arr_num, 'ref_function');
echo "<pre>";
print_r($arr_num);
echo "</pre>";
echo "<br><br>";

// array_walk_recursive
function recursive_fun($value, $index) {
        echo $index .' : '. $value."<br>";
}
$arr01 = ['z' => 'zoo', 'y' => 'youst'];
$arr02 = [$arr01, 't' => 'teacher', 'l' => 'lion', 12, 2.5];

echo "<pre>";
print_r($arr02);
echo "</pre>";
array_walk_recursive($arr02, 'recursive_fun');
echo "<br><br>";

// encode php to json

$php_arr = ['html', 'css',  'javascript',  'java',  'phyton'];
$json_data = json_encode($php_arr, JSON_FORCE_OBJECT);
var_dump($json_data);
br();

// array_map

$num = [3,2,4,5,6];
function cube($n) {
        return $n*$n*$n;
}

$cube_num = array_map('cube', $num);
pre($cube_num);
echo "<br>";

function show_spanish($a, $b) {
        return "The number $a is called $b in Spanish";
}
function map_spanish($a, $b) {
        return [$a => $b];
}

$a = [1, 2, 3, 4, 5];
$b = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];

$c = array_map('show_spanish', $a, $b);
pre($c);
$d = array_map("map_spanish", $a, $b);
pre($d);
br();

// creating array by loop element

$creArr = array();
for($i = 1; $i<=5; $i++) {
        $creArr[] = $i;
}
pre($creArr);

// array_rand

//$color = ['red', 'green', 'blue', 'black', 'yellow'];
$color = ['a' => 'red', 'b' => 'yellow', 'c' => 'green', 'd' => 'black', 'e' => 'blue'];
$one_color = array_rand($color);
pre($one_color);
//echo $color[$one_color];

// shuffle

shuffle($color);
foreach($color as $value) {
        echo $value." ";
}
br();

// array_reduce

$fav_color = ['red', 'green', 'blue', 'black', 'yellow'];
function fnct($carry, $item) {
        return $carry;
}
$one_fav_color = array_reduce($fav_color, 'fnct');
echo $one_fav_color;

// array_combine

$a1 = [1,4,5,6,7];
$a2 = ['red', 'green', 'blue', 'black', 'yellow'];

$arr_com = array_combine($a1,$a2);
pre($arr_com);
br();

$spc_arr = ['a' => 'php', 'b' => 'c programming', 'c' => 'java', 'c' => 'java', 'd' => 'yellow', 'e' => 'black'];
pre($array_key = array_keys($spc_arr, 'java'));
br();

// array_diff

pre(array_diff($a2, $spc_arr));
br();

// floor, round, ceil

echo "floor 4.6: ".floor(4.6)."<br>";
echo "ceil 4.6: ".ceil(4.6)."<br>";

br();

// str_replace, str_ireplace

$str = 'hello my name is John Doe and i love php very much';
$find = ['john', 'doe', 'php'];
$rep = ['mosh', 'hamadani', 'java'];
$new_str = str_ireplace($find, $rep, $str);
echo $str ."<br>";
echo $new_str."<br>";

$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$search_vowels = str_replace($vowels, '', 'Hello World of PHP very much', $count);
echo $search_vowels."<br>";
echo $count."<br>";

$search  = array('A', 'B', 'C', 'D', 'E');
$replace = array('B', 'C', 'D', 'E', 'F');
$subject = 'A';
echo str_replace($search, $replace, $subject)."<br>";

$latters = ['a', 'm'];
$foods = ['apple', 'mango'];
$text = ['a', 'm'];
//str_replace($latters, $foods, $text)."<br>";

$letters = array('a', 'p');
$fruit   = array('apple', 'pear');
$text    = 'a p';
$output  = str_replace($letters, $fruit, $text);
echo $output;
br();

// substr_replace

$str = 'hello my name is john doe and i am a php lover';
$substr_replace = substr_replace($str, ' mosh ', 16, -20);
echo $substr_replace."<br>";

$letters = "ABCDEFGHMNPQR";
echo substr_replace($letters, 'bob ', 0, 0)."<br>";
echo substr_replace($letters, 'bob', 8)."<br>";

$input = ['A: XXX', 'B: XXX', 'C: XXX'];
//$input = implode(';', $input);
echo implode(';', substr_replace($input, "YYY", 3,3))."<br>";
$replace = ['AAA', "BBB", 'CCC'];
echo implode(', ', substr_replace($input, $replace, 3,3))."<br>";
// replace different number of characters each time
$length = [1,2,3];
echo implode(', ', substr_replace($input, $replace, 3, $length))."<br>";

$name = "my name is john i love php";
echo substr_replace($name, ' mosh', 11, 0)."<br>";
echo substr_replace('555', '.',2,0);
br();

// strtr

$str = 'I love java and kotlin';
$rep = ['java' => 'php', 'kotlin' => 'phyton'];
echo strtr($str, $rep)."<br>";
echo strtr('baab', 'ab', '11')."<br>";
$rep = ['aa' => '11'];
echo strtr('baab', $rep);
br();

// array_shift, // array_unsift

$programming_lang = ['php', 'java', 'kotlin', 'phyton', 'c++'];
array_unshift($programming_lang, 'c#', 'javascript');
print_r($programming_lang);
br();

// usort

$arr = [20,40,10,15,50,30,8,2];

usort($arr, function($a, $b) {
        if($a == $b) {
                return 0;
        } else {
                return $a > $b ? -1:1;  
        }
});

foreach($arr as $value) {
        echo "$value<br>";
}
br();

// sort multidimensonal for multiple value

$details_emp = [
        [
                'name' => 'Sally',
                'nick_name' => 'sall',
                'availability' => '0',
                'is_fav' => '0'
        ],
        [
                'name' => 'David',
                'nick_name' => 'dav07',
                'availability' => '0',
                'is_fav' => '1'
        ],
        [
                'name' => 'Zen',
                'nick_name' => 'zen',
                'availability' => '1',
                'is_fav' => '0'
        ],
        [
                'name' => 'Jackson',
                'nick_name' => 'jack',
                'availability' => '1',
                'is_fav' => '1'
        ],
        [
                'name' => 'Rohit',
                'nick_name' => 'rod',
                'availability' => '0',
                'is_fav' => '0'
        ]
        ];

        usort($details_emp, function($a, $b){
                $c = $b['is_fav'] - $a['is_fav'];
                $c .= $b['availability'] - $a['availability'];
                $c .= strcmp($a['nick_name'], $b['nick_name']);
                return $c;
                //return strcmp($a['nick_name'], $b['nick_name']);
        });
        
        var_dump($details_emp);
        br();

        // list

        $colos = ['red', 'green', 'blue', 'yellow', 'orange'];
        list($a,$b,$c,$d,$e) = $colos;
        echo $d."<br>";

        $num = [1,2,3,4,5,6];
        foreach($num as list($a, $b)) {
                echo "$a $b";
        }
br();

// array_rand, array_shuffle
$col = [10, 50,'black', 'blue'];
$one_color = array_rand($col, 2);
echo "the value: <br>";
for($i = 0; $i < sizeof($one_color); $i++) {
        echo $col[$one_color[$i]]." ";
}
echo "<br>";


function shuffle_assoc($my_array)
	{
        $keys = array_keys($my_array);

        shuffle($keys);

        foreach($keys as $key) {
            $new[$key] = $my_array[$key];
        }

        $my_array = $new;

        return $my_array;
    }

$colors = array("color1"=>"Red", "color2"=>"Green", "color3"=>"Yellow");
br();

//print_r(shuffle_assoc($colors));


for($i = 0; $i < 5; $i++) {
        $pass_order[] = chr(rand(65, 90)); 
}
print_r($pass_order);
br();

// null reset
$null = NULL;
echo "It is the example of null: ". var_dump($null);
br();

$arr = ['step one', 'step two', 'step theree', 'step 4'];
echo current($arr)."<br>";
next($arr);
next($arr);
echo current($arr)."<br>";
reset($arr);
echo current($arr);
br();

$email = ['xyz@example.com', 'dse@exaple.com', 'mno@exaple.com', 'xyz@example.com'];


natcasesort($email);
//echo current($email)."<br>";
reset($email);
//echo current($email)."<br>";
foreach($email as $key => $value) {
        echo $value."[$key] <br>";
}
br();

function email_not_unique($emails) {
       natcasesort($emails);
       reset($emails);
       $same = [];
       $email_first = $emails[0];
       foreach($emails as $key => $value) {
               if($value == NULL) {continue;};
               if($email_first == $value) {
                       $same[] = $value;
               } else {
                        $email_first = $value;
               }
               
       }
       return $same;
}

$email = ['xyz@example.com', 'dse@exaple.com', 'mno@exaple.com', 'xyz@example.com'];
pre(email_not_unique($email));
br();

function print_all($email) {
        for($i = 0; $i < sizeof($email); $i++) {
                echo $email[$i]."<br>";
        }
}

pre(print_all(range('a', 'e')));
br();

// array_intersect

$array01 = ['red', 'green', 'blue', 'yellow'];
$array02 = ['purple', 'green', 'pink', 'skyblue'];
$common_value = each($array02);

pre($common_value);
br();

// array_reduce

$result = array_reduce([1,2,3,4,5], function($carry, $item) {
        return $carry + $item;
});
echo $result."<br>";

$result = array_reduce([10,5,8,100,50,80], function($carry, $item) {
        return $item > $carry ? $item:$carry;  
});
echo "The bigest number is: $result <br>";   
echo array_search('yellow', $array01);
br();

$email = 'nishanctg2000@gmail.com';
list($name, $domain) = explode('@', $email);
echo $name." <br> ".$domain;
br();

$str = 'hello world';
echo strstr($str, 'o', true).'<br>';
echo substr_replace('hello', 'world', strlen('hello'))."<br>";

var_dump(substr($str, 0, strpos($str, ' ')) == 'Hello');

$burb = "Lorem ipsum dolor sit amet consectetur adipisicing elit";
$limt = 20;
echo substr($burb, 0, $limt - 3).' ....';
br();

// mail validtation with string

$email = 'text@example.com';
$wrong = 'foobar.co.uk';
$notld = 'foo@bar';

$at = strpos($email, '@'); // 4
$wat = strpos($wrong, '@'); 
$nat = strpos($notld, '@');

$domain = substr($email, $at+1);
$womain = substr($wrong, $wat+1);
$nomain = substr($notld, $nat+1);

$dot = strpos($domain, '.');
$wot = strpos($womain, '.');
$not = strpos($nomain, '.');

$tld = substr($domain, $dot+1);
$wld = substr($womain, $wot+1);
$nld = substr($nomain, $not+1);

// check valid or invalid

if($at && $dot) {
        echo "$email is valid <br>";
} else {
        echo "$email is not valid <br>";
}
if($wat && $wot) {
        echo "$wrong is valid <br>";
} else {
        echo "$wrong is not valid <br>";
}
if($nat && $not) {
        echo "$notld is valid <br>";
} else {
        echo "$notld is not valid <br>";
}

// check email is uk or not

if($tld == 'co.uk') {
        echo "$email is UK address <br>";
}
if($wld == 'co.uk') {
        echo "$wrong is UK address <br>";
}
if($nld == 'co.uk') {
        echo "$notld is UK address <br>";
}
br();

$my_name = 'sa nishan';

if(strpos($my_name, 'nishan') != false) {
        echo "my name is found";
} else {
        echo "my name is not found";
}
br();

// get all occurance of a substring

$haystack = 'a baby, a cat, a dunkey, a fish';
$needle = 'a';
$offset = [];

for($offset = 0; $offset < strlen($haystack); ) {
        $pos = strpos($haystack, $needle, $offset);
        if($pos === false){
                break;
        } else {
                $offset[] = $pos;
                $offset = $pos+1;
        }            
}






?>      
</body>
</html>
