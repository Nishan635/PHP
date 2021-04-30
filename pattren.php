<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
		div {
			border: 1px solid black;
			margin: 10px 900px 0px 0px;
			padding: 20px;
		}
	</style>
</head>
<body>
	<?php
echo "<div>";
$n=5;
for($i=1; $i<=$n; $i++)
{
	for($j=1; $j<=$i; $j++)
	{
		echo ' * ';
	}
	echo '<br>';
}
for($i=$n; $i>=1; $i--)
{
	for($j=1; $j<=$i; $j++)
	{
		echo ' * ';
	}
	echo '<br>';
}

echo "</div>";

echo "<div>";
$num = 5;
for($i = 1; $i <= $num; $i++) {
	for($j = 1; $j <= $i; $j++) {
		echo " * ";
	}
	echo "<br>";
}
for($i = 1; $i <= $num; $i++) {
	for($j = $num; $j >= $i; $j--) {
		echo " * ";
	}
	echo "<br>";
}
echo "</div>";

echo "<div>";
$num02 = 4;
$n = 1;
for($i = 1; $i <= $num02; $i++) {
	for($j = 1; $j <= $i; $j++) {
		echo $n." ";
		$n++;
	}
	echo "<br>";
}
echo "</div>";

echo "<div>";
for($i = 1; $i <= $num02; $i++) {
	for($k = $num02; $k > $i; $k--) {
		echo "&nbsp; &nbsp;";
	}
	for($j = 1; $j <= $i; $j++) {
		echo $n."&nbsp; &nbsp;";
		$n++;
	}
	echo "<br>";
}
echo "</div>";

echo "<div>";
$name = ['N','I','S','H','A','N'];
$len = 6;
for($i = 0; $i<$len; $i++) {
	for($j = 0; $j<=$i; $j++) {
		echo $name[$j]." ";
	}
	echo "<br>";
}
echo "</div>";

?>	
</body>
</html>

