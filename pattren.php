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

<?php 
echo "<h2>Pattrens Next Part</h2>";
for($i = 1; $i <= 5; $i++) {
        for($k = 1; $k <= $i; $k++) {
                echo "*";
        }
        echo "<br>";
}
for($i = 4; $i >= 1; $i--) {
        for($k = 1; $k <= $i; $k++) {
                echo "*";
        }
        echo "<br>";
}
echo "<br><br>";

$name = ['N', 'I', 'S', 'H', 'A', 'N'];
for($i = 0; $i < sizeof($name); $i++) {
       for($k = 0; $k <= $i; $k++) {
               echo $name[$k];
       }
       echo "<br>";
}

for($i = sizeof($name) - 2; $i >= 0; $i--) {
       for($k = 0; $k <= $i; $k++) {
                echo "$name[$k]";
       }
       echo "<br>";
}

echo "<br><br>";

$n = 1;
for($i = 1; $i <= 4; $i++) {
        for($k = 1; $k <= $i; $k++) {
                echo $n." ";
                $n++;
        }
        echo "<br>";
}
echo "<br><br>";

for($i = 1; $i <= 5; $i++) {
        for($k = 1; $k <= 5; $k++) {
                echo "* ";
        }
        echo "<br>";
}
echo "<br><br>";

for($i = 1; $i <= 5; $i++) {
        for($j = $i; $j <= 5; $j++) {
                echo " * ";
        }
        echo "<br>";
}

for($i = 1; $i <= 5; $i++) {
        for($k = $i; $k <= 5; $k++) {
                echo "&nbsp; &nbsp;";
        }
        for($j = 1; $j <= $i; $j++) {
                echo " * ";
        }
        echo "<br>";
}

echo "<br><br>";

for($i = 1; $i <= 5; $i++) {
        for($k = 1; $k <= $i; $k++) {
                echo "&nbsp; &nbsp;";
        }
        for($j = $i; $j <= 5; $j++) {
                echo " * ";
        }
        echo "<br>";
}
echo "<br><br>";
for($i = 1; $i <= 5; $i++) {
        for($k = $i; $k <= 5; $k++) {
                echo "&nbsp; &nbsp;";
        }
        for($l = 1; $l <= $i; $l++) {
                echo " * ";
        }
        for($j = 1; $j < $i; $j++) {
                echo " * ";
        }
        echo "<br>";
}
echo "<br><br>";

for($i = 1; $i <= 5; $i++) {
        for($j = 1; $j <= $i; $j++) {
                echo "&nbsp; &nbsp;";
        }
        for($k = $i; $k <= 5; $k++) {
                echo " * ";
        }
        for($l = $i; $l < 5; $l++) {
                echo " * ";
        }
        
        echo "<br>";
}

echo "<br><br>";
for($i = 1; $i <= 5; $i++) {
        for($k = $i; $k <= 5; $k++) {
                echo "&nbsp; &nbsp;";
        }
        for($l = 1; $l <= $i; $l++) {
                echo " * ";
        }
        for($j = 1; $j < $i; $j++) {
                echo " * ";
        }
        echo "<br>";
}


for($i = 1; $i <= 5; $i++) {
        for($j = 1; $j <= $i; $j++) {
                echo "&nbsp; &nbsp;";
        }
        for($k = $i; $k <= 5; $k++) {
                echo " * ";
        }
        for($l = $i; $l < 5; $l++) {
                echo " * ";
        }
        
        echo "<br>";
}
echo "<br><br>";

for($i = 1; $i <= 5; $i++) {
        for($k = 1; $k <= $i; $k++) {
                echo "&nbsp; &nbsp;";
        }
        for($l = $i; $l <= 5; $l++) {
                echo " * ";
        }
        for($j = $i; $j < 5; $j++) {
                echo " * ";
        }
        echo "<br>";
}
for($i = 1; $i <= 5; $i++) {
        for($j = $i; $j <= 5; $j++) {
                echo "&nbsp; &nbsp;";
        }
        for($l = 1; $l <= $i; $l++) {
                echo " * ";
        }
        for($m = 1; $m < $i; $m++) {
                echo " * ";
        }
        echo "<br>";
}
echo "<br><br>";

for($i = 1; $i <= 5; $i++) {
        for($k = 1; $k <= $i; $k++) {
                echo " * ";
        }
        for($l = $i; $l <= 5; $l++) {
                echo "&nbsp; &nbsp;";
        }
        for($m = $i; $m <= 5; $m++) {
                echo "&nbsp; &nbsp;";
        }
        for($n = 1; $n <= $i; $n++) {
                echo " * ";
        }
        echo "<br>";
}
for($i = 1; $i <= 5; $i++) {
        for($l = $i; $l <= 5; $l++) {
                echo " * ";
        }
        for($m = 1; $m <= $i; $m++) {
                echo "&nbsp; &nbsp;";
        }
        for($n = 1; $n <= $i; $n++) {
                echo "&nbsp; &nbsp;";
        }
        for($j = $i; $j <= 5; $j++) {
                echo " * ";
        }
        echo "<br>";
}

?>




</body>
</html>

