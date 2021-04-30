<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
		table, tr, td, th {
			border: 2px solid green;
			border-collapse: collapse;
			padding: 10px;

		} 
		.mul {
			color: blue;
			font-size: 25px;
			text-align: center;
		}
		th {
			background-color: yellowgreen;
			color: #ffffff;
		}
		
	</style>
</head>
<body>
	<?php

// array basic
// associative array
// foreach loop
// multidimensional array
// multidimensional associative array
// foreach loop with list

$students = [
	'name' => 'Mosh Hamadani',
	'age' => 22,
	'profession' => 'programmer',
	'skill' => 'PHP'
];


foreach($students as $key => $value) {
	echo "$key : $value <br>";
};

echo "<br><br>";

$boss = [
	[1, 'Mosh Hamadani', 'PHP', 'Egypt'],
	[2, 'Mike Smith', 'JavaScript', 'USA'],
	[3, 'Traversy', 'NodeJS', 'USA'],
	[4, 'Yahoo Baba', 'PHP', 'India'],
	[5, 'Sumit Shaha', 'JavaScript', 'Bangladesh']
];

echo "<table>";
echo "<tr>
	<th>SN</th>
	<th>Name</th>
	<th>Skill</th>
	<th>Country</th>
</tr>";
foreach($boss as list($sl, $name, $skill, $coun)) {
	echo "<tr>
		<td>$sl</td>
		<td>$name</td>
		<td>$skill</td>
		<td>$coun</td>
	 </tr>";
};
echo "</table>";
echo "<br><br>";

echo "<table>";
for($i = 1; $i <= 100; $i+=10) {
	echo "<tr>";
	for($j = $i; $j < $i + 10; $j++) {
		echo '<td>'.$j.'</td>';
	}
	echo "</tr>";
}

echo "</table>";

echo "<p class='mul'>multidimensional associative array</p>";

$marks = [
	'Mosh' => [
		'PHP' => 90,
		'JS' => 95,
		'HTML' => 100
	],

	'John' => [
		'PHP' => 95,
		'JS' => 90,
		'HTML' => 99
	],

	'Smith' => [
		'PHP' => 97,
		'JS' => 92,
		'HTML' => 98
	]
];

echo '<table>';
echo "<tr>
	<th>Name</th>
	<th>PHP</th>
	<th>JS</th>
	<th>HTML</th>
</tr>";
foreach($marks as $key => $v1) {
	echo "<tr>
	<td>$key</td>";
	foreach($v1 as $v2) {
		echo "<td>".$v2."</td>";
	} 
	echo "</tr>";
}

echo "</table>";

$workrs = [
	[
		'basri' => 1,
		'name' => 'smith',
		'degination' => 'Oparator',
		'salary' => 10000
	],
	[
		'basri' => 2,
		'name' => 'john',
		'degination' => 'Driver',
		'salary' => 20000	
	],
	[
		'basri' => 3,
		'name' => 'mosh',
		'degination' => 'programmer',
		'salary' => 50000
	]
];

echo "<br><br>";

echo "<table>";
echo "<tr>
	<th>SL</th>
	<th>Name</th>
	<th>Degination</th>
	<th>Salary</th>
</tr>";
foreach ($workrs as $v1) {
	echo "<tr>";
	foreach($v1 as $v2) {
		echo "<td>". $v2."</td>";
	}
	echo "</tr>";
};

echo "</table>";

?>
</body>
</html>