<?php 
//htmlentities()
//html_entity_decode()
//htmlspecialchars();
//htmlspecialchars_decode()
//get_html_translation_table()
//md5()
//sha1()
//convert_uuencode()
//convert_uudecode()

$value = (0x7fffffffffffffff);
$char = chr($value);
echo "$char <br>";

$str = "I love PHP very much";
$encode = bin2hex($str);
echo $encode."<br>";
$decode = hex2bin($encode);
echo $decode."<br>";


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

?>