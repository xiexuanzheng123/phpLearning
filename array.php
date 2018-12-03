<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $t = date('H');
    echo($t);
    echo("<br>");

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    foreach($age as $x=>$x_value) {
        echo "key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    $cars = array("volvo", 'BWM', 'Toyota');
    sort($cars);
    print_r($cars);
?>
</body>
</html>