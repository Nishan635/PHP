<?php 
function swap($name) {
        $name = "Hello $name How're you? <br>";
        return $name;
}
$name = 'Mosh';
$intro = swap($name);
echo $intro;

$abc = function() {
        echo "Hello how are you all";
};
$abc();
echo "<br>";

// undestanding of referance variable

function sum(&$num1, &$num2) {
        $num1 = 10;
        $num2 = 20;
        $sum = $num1 + $num2;
        echo "$sum <br>";
}

$num1 = 20;
$num2 = 30;
sum($num1, $num2);
echo "num1 = $num1, num2 = $num2 <br>";

// returing referance form function

function great($name) {
        $name = "nishan";
        $great = "Hello $name <br>";
        return $great;
}
$name = 'john';
echo great($name);
echo "$name <br>";


// using referance to change value in 'foreach' loop

$brands = ['The Who', 'The Beatless', 'The Rolling Stone'];
foreach($brands as &$band) {
        $band = strtoupper($band);
        echo "$band <br>";
}
echo "<pre>";
print_r($brands);
echo "</pre>";
echo "<br><br>";

// recurcive function

function recursive($num) {
        if($num <= 10) {
                echo $num. " ";
                recursive($num + 1);
        }
}

recursive(1);
echo "<br><br>";

function factorial($num) {
        $fact = 1;
        if($num == 0) {
                echo 1;
        } else {
                for($i = 1; $i<=$num; $i++) {
             $fact =  $fact * $i; 
      }
      echo $fact;
        }
      
}
factorial(0);
echo "<br><br>";


function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$a = IsPrime(2);
if ($a==0)
echo 'This is not a Prime Number.....'."<br>";
else
echo 'This is a Prime Number..'."<br>";

function primeNumber($num) {
        for($i = 2; $i < $num; $i++) {
                if($num % $i == 0) {
                        return 0;
                } else {
                        return 1;
                }
        }
}

$a = primeNumber(2);
if($a==0) {
        echo "it is not a prime number <br>";
} else {
        echo "it is a prime number";
}

// reverse a string

function reverse_string($str1)
{
 $n = strlen($str1);
 if($n == 1)
   {
    return $str1;
   }
 else
   {
   $n--;
   return reverse_string(substr($str1,1, $n)) . substr($str1, 0, 1);
   }
}
print_r(reverse_string('12345')."<br><br>");

function reserveString($str1) {
        $n = strlen($str1);
        if($n == 1) {
                return $str1;
        } else {
                return reserveString(substr($str1, 1, $n)).substr($str1, 0, 1);
        }
}

echo reserveString('mosh')."<br><br>";

// find factorial with function

function factorial1($num) {
        if($num == 0) {
                return 1;
        } else {
                $fact = $num * factorial1($num - 1);
                return $fact;
        }
}
 
echo factorial1(3)."<br><br>";

// sort an array with function

function array_sort($a)
{
 for($x=0;$x< count($a);++$x)
  {
    $min = $x;
  for($y=$x+1;$y< count($a);++$y)
   {
	 if($a[$y] < $a[$min] ) 
	 {
	   $temp = $a[$min];
	   $a[$min] = $a[$y];
	   $a[$y] = $temp;
	 }
	}
  }
 return $a;
 }
// is lowercase

function isLowercase($txt) {
        $txt = str_replace(' ', '', $txt);
        for($i = 0; $i < strlen($txt); $i++) {
                if(ord($txt[$i]) >= ord('a') && ord($txt[$i]) <= ord('z')) {
                        return true;
                } else {
                        return false;
                }
        }
}

$txt = "my name is john doe";
var_dump(isLowercase($txt)); 
echo "<br><br>";

// check palindrome  or not

function isPalindrome($txt) {
        $txt = str_replace(' ', '', $txt);
        if($txt == strrev($txt)) {
                return true;
        } return false;
}

$word = 'madam';
if(isPalindrome($word) == true) {
        echo "It is a PALINDROME word";
} else {
        echo "It is not";
}
echo "<br><br>";
// reverse an array

function reverseString($str) {
        return strrev($str);
}

echo reserveString("12345");
?>

