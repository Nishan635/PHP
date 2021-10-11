<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Regular Experation</title>
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


$str = 'hello%^';
preg_match_all("/\w/", $str, $result);
pre($result);

?>
</body>
</html>