<?php 
$position_of_fibonacci = 20;
$num1 = 0;
$num2 = 1;
for($i = 0; $i <= $position_of_fibonacci; $i++) {
       if($i==$position_of_fibonacci) {
               echo $num1.".";
       } else {
               echo $num1.", ";
       }
       $sum = $num1+$num2;
       $num1 = $num2;
       $num2 = $sum;
}
echo "<br><br>";
$sum = 0;
for($i = 1; $i <= 5; $i++) {
       $sum = $sum + ($i**$i);
}
echo "The sum is: $sum <br>";
$sum = 0;
$pow = 2;
for($i = 1; $i <= 5; $i++) {
       
        $sum = $sum + ($i**$pow);
        $pow+=2;
}
echo "The sum is: $sum <br><br>";

$num = 6;
$container = 1;
if($num == 0) {
        echo 1;
} else {
        for($i = 1; $i <= $num; $i++) {
                $container = $container*$i; 
                if($i == $num) {
                        echo $i. " ";
                } else {
                        echo $i. " x ";
                }
        }
        echo " = ". $container;
}
echo "<br><br>";

for($i = 1; $i<=5; $i++) {
        for($j = $i; $j<=5; $j++) {
               echo "$j";
        }
        echo "<br>";
}
 
?>