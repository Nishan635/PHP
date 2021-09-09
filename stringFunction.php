<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Function</title>
</head>
<style>
table,tr,td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 5px;
}
</style>
<body>
    <?php 
//extract()
    // EXTR_SKIP
    // EXTR_PREFIX_SAME
    // EXTR_PREFIX_ALL
//compact()
//range()
//explode()
//implode()
//join()
//str_split()
//chunk_split()
//strlen()
//str_word_count()
//substr_count()
// Search String Poisition
    //strpos()
    //strrpos()
    //stripos()
    //strripos()
// String Search Function
    //strstr()
    //strchr()
    //stristr()
    //strpbrk()
//substr()
// String Replace Function
    //str_replace()
    //str_ireplace()
    //substr_replace()
    //strtr()

// String Compare Function
//strcmp()
//strncmp()
//strcasecmp()
//strncasecmp()
//strnatcmp()
//strnatcasecmp()
//substr_compare()
//similar_text()

//str_pad(string, length, pad_string, pad_type, STR_PAD_BOTH);
//str_repeat()
//trim()
//ltrim()
//rtrim()
//chop()
//htmlentities()
//html_entity_decode()
//htmlspecialchars();
//htmlspecialchars_decode()
//get_html_translation_table()


$num = [10, -12, 15, 20];
$floor = floor($num[1]);
echo $floor."<br>";

$str = "I love php very much";
$sub_str = substr_replace($str, 'javascript ', 7, 0);
echo $sub_str."<br><br>";

$password = '9357kl2@kdjg';
echo "The Password: $password <br>";
$pass_hex_formet = md5($password);
$pass_bin_formet = md5($password, TRUE);
$pass_hex_formet_sha1 = sha1($password);
$pass_bin_formet_sha1 = sha1($password, TRUE);

echo "md5 The hex formet of password: $pass_hex_formet <br>";
echo "md5 The binary formet of password: $pass_bin_formet <br>";
echo "sha1 The hex formet of password: $pass_hex_formet_sha1 <br>";
echo "sha1 The binary formet of password: $pass_bin_formet_sha1 <br>";

echo "<br><br><br><br>";
$str = "<a href='https://www.yahoo-baba.com'> Yahoo Baba </a>";
$html_enti = htmlspecialchars($str, ENT_QUOTES);
echo $html_enti."<br>";
$html_decode = htmlspecialchars_decode($html_enti);
echo $html_decode."<br>";

$name = "My name is 'John Doe'";
echo $name."<br>";
$adds_name = addslashes($name);
echo "$adds_name <br>";
echo stripslashes($adds_name)."<br>";
$str = "+I love PHP+";
echo "Original String: ".$str."<br>";
echo "String after trim: ".trim($str, "+")."<br>";

$str1 = "I love PHP";
echo str_repeat($str1, 10)."<br>";
$str1 = str_pad($str1, 20, "+=", STR_PAD_BOTH);
echo $str1;
echo "<br>";
$str01 = "Ilovephp";
$str02 = "I LOVE PHP too";
$str02 = strrev($str02);
echo $str02."<br>";
$str02 = "I LOVE PHP too";
echo str_shuffle("I love php");
echo "<br>";
echo similar_text($str01, $str02);
echo "<br>";

echo strnatcmp("20I LOVE PHP too", "10I love PHP");
echo "<br>";
$str = "I love JavaScript very much";
echo "$str <br>";
$sub_rep = substr_replace($str, " PHP and ", 6,1);
echo "Sub replace: $sub_rep <br>";
$str = "JavaScript is my favourite language";
echo $str."<br>";
$rep = str_ireplace("javascript", 'PHP', $str);
echo "Replace: ". $rep."<br>";

$str = "John loves php. I love php too";
//echo strpbrk($str, "eo")."<br>";

echo strripos($str, 'PHP')."<br>";

$str = "Hello I'm john doe. Hello I'm Smith";
if(substr_count($str,"hello")) {
    echo "Find The word <br>";
} else {
    echo "Can't find the word <br>";
}

//echo $newStr."<br>";

$name = 'John Doe';
$strSplit = chunk_split($name, 1, '..');

echo $strSplit;


echo "Capital Letter <br>";
echo "<table>";
echo "<tr>";
foreach(range("A", "Z") as $letter) {
    echo "<td>".$letter."</td>";
}
echo "</tr>";
echo "</table>";
$fname = 'john';
$lname = 'doe';
$age = 34;
$gender = 'male';
$cont = 'UK';
$extra = ["gender", "cont"];
$nameStu = compact("fname", "lname", "age", $extra);
foreach($nameStu as $key => $value) {
    echo $key. " => ". $value."<br>";
}
// echo "<pre>";
// print_r($nameStu);
// echo "</pre>";

$b = 'yellow';
$color = ['a' => 'red', 'b' => 'green', 'c' => 102];
extract($color, EXTR_PREFIX_ALL, 'pre_val');
echo "The value of a is: $pre_val_a <br>";
echo "The value of b is: $b <br>";
echo "The another value of b is: $pre_val_b <br>";
echo "The value of c is: $pre_val_c <br>";

$lang = ['php','js','java','python'];
list($a[0], $a[1], $a[2], $a[3]) = $lang;
for($i=0; $i<count($lang);$i++) {
    echo $a[$i]."<br>";    
}
//echo "The value of a is: $a[0] <br>";

echo "<b>Current: </b>". current($lang)."<br>";
echo "<b>Current: </b>". key($lang)."<br>";
next($lang);
echo "<b>Current: </b>". current($lang)."<br>";
echo "<b>Current: </b>". key($lang)."<br>";
next($lang);
echo "<b>Current: </b>". current($lang)."<br>";
echo "<b>Current: </b>". key($lang)."<br>";
end($lang);
echo "<b>Current: </b>". current($lang)."<br>";
echo "<b>Current: </b>". key($lang)."<br>";
echo "<pre>";
print_r(each($lang));
echo "</pre>";
?>
</body>
</html>