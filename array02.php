<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
		table, tr, td, th {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 10px;
			font-family: arial;
		}
		.mul {
			margin-top: 10px;
			color: #444;
			margin-left: 20px;
			font-size: 18px;
			font-family: arial;
		}

		th {
			background-color: orange;
		}

		tr:nth-child(odd) {
			background-color: #4444;
		}
	</style>
</head>
<body>
	<?php 


		$boss = [
			[1, 'Mosh Hamadani', 'PHP', 'Egypt'],
			[2, 'Mike Smith', 'JavaScript', 'USA'],
			[3, 'Traversy', 'NodeJS', 'USA'],
			[4, 'Yahoo Baba', 'PHP', 'India'],
			[5, 'Sumit Shaha', 'JavaScript', 'Bangladesh']
		];

		echo "<table>";
		echo "<tr> 
			<th>S.N</th>
			<th>Name</th>
			<th>Skill</th>
			<th>Country</th>
		</tr>";
		foreach($boss as $row) {
			echo "<tr>";
			foreach($row as $col) {
				echo "<td> $col </td>";
			}
			echo "</tr>";
		}
		echo "</table>";

		// for($row = 0; $row < 5; $row++) {
		// 	for($col = 0; $col < 4; $col++) {
		// 		echo $boss[$row][$col]." ";
		// 	}
		// 	echo "<br>";
		// }

		
		$john = [
			'name' => 'John Doe',
			'age' => 34,
			'porfession' => 'Web Developer',
		];

		// foreach($john as $key => $value) {
		// 	echo "$key => $value <br>";
		// }

		$num = 10;


		for($i = 1; $i <= 10; $i++) {
			$mul = $num * $i;
			echo "<div class='mul'> $num x $i = $mul </div>";
		} 

		for($i = 1; $i <= 20; $i++) {
			for($j = 1; $j <= 10; $j++) {
				$mul = $i * $j;
				echo "<div class='mul'> $i x $j = $mul </div>";
			}
			echo "<br>";
		}

		echo "<br> <br>";
		echo "<table>";
		for($row = 1; $row <= 100; $row+=10) {
			echo "<tr>";
			for($col = $row; $col < $row + 10; $col++) {
				echo "<td> $col </td>";
			}
			echo "</tr>";
		}
		echo "</table>";

		echo "<br><br>";

		// multidimensional associative array

		$marks = [
			"john" => [
				"html" => 40,
				"css" => 35,
				"js" => 45
			],
			'mosh' => [
				'html' => 45,
				'css' => 48,
				'js' => 49
			],
			'smith' => [
				'html' => 48,
				'css' => 47,
				'js' => 42
			]
		];

		echo "<table>";
		echo "<tr>
				<th>Name</th>
				<th>HTML</th>
				<th>CSS</th>
				<th>JS</th>
			</tr>";
		foreach($marks as $v1 => $v2) {
			echo "<tr>
				<td> $v1 </td>";
			foreach($v2 as $v3) {
				echo "<td> $v3 </td>";
			}
			echo "</tr>";
		}

		echo "</table>";

		echo "<br><br>";

		$emp = [
			['john', 'php', 50000, 'usa'],
			['john', 'php', 50000, 'usa'],
			['john', 'php', 50000, 'usa'],
			['john', 'php', 50000, 'usa']
		];

		echo "<table>";
		echo "<tr>
			<th>Name</th>
			<th>Skill</th>
			<th>Salary</th>
			<th>Country</th>
		</tr>";
		foreach($emp as list($name, $skill, $sall, $cont)) {
			echo "<tr> 
					<td>$name</td> 
					<td>$skill</td> 
					<td>$sall</td> 
					<td>$cont</td> 
				</tr>";
		};
		echo "</table>";
		echo "<br><br>";
	?>
	<?php 
		// array_replace()
		// array_replace_recursive
		// array_pop & array_push
		// array_shift & array_unshift
		// array_merge

		$fruits = ['a' => 'apple','b' => 'mango','c' => 'banana','d' => 'orange'];
		$veggi = ['a' => 'john','f' => 'doe','g' => 'smith'];
		//$newArray = array_merge($fruits, $veggi);
		$newArray = array_merge_recursive($fruits, $veggi);
		echo "<pre>";
		print_r($newArray);
		echo "</pre>";
		echo $newArray['a'][1];
		// $fruits = ['apple', 'mango', 'banana', 'orange'];
		// array_unshift($fruits, 'graps','lamon','cucumber','pinaapples');
		// print_r($fruits);

		$array1 = [
			'a' => ['yellow, red'],
			'b' => ['black', 'orange'],
			'pink'
		];

		$array2 = [
			'a' => ['john', 'doe'],
			'b' => ['js', 'php']
		];

		$array3 = array_replace_recursive($array1, $array2);

		echo "<pre>";
		print_r($array1);
		echo "</pre>";

		echo "<pre>";
		print_r($array2);
		echo "</pre>";

		echo "<pre>";
		print_r($array3);
		echo "</pre>";

		// $fruits = ['a' => 'apple', 'mango', 'banana', 'orange'];
		// $vaggie = [1 => 'carrot', 'a' => 'pepe', 'c' => 'potato'];
		// $newArray = array_replace($fruits, $vaggie);

		// echo "<pre>";
		// print_r($fruits);
		// echo "</pre>";

		// echo "<pre>";
		// print_r($vaggie);
		// echo "</pre>";

		// echo "<pre>";
		// print_r($newArray);
		// echo "</pre>";
	?>
</body>
</html>