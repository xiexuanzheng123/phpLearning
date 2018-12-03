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
    $txt1 = 'Hello world!';
    $txt2 = 'What a nice day!';

    echo($txt1 . " " . $txt2);
    echo("<br>");
    echo strpos($txt1, "world");

    echo("<br>");
    echo(10 / 3);
    echo("<br>");
    echo(intdiv(10, 3));

    echo("<br>");
    $x = array("a" => "red", "b" => "green"); 
    $y = array("c" => "blue", "d" => "yellow"); 
    $z = $x + $y; // $x 和 $y 数组合并
    var_dump($z);
    echo("<br>");
    var_dump($x == $y);
    echo("<br>");
    var_dump($x === $y);
    echo("<br>");
    var_dump($x != $y);
    echo("<br>");
    var_dump($x <> $y);
    echo("<br>");
    var_dump($x !== $y);
    echo("<br>");echo("<br>");echo("<br>");

    $test = '菜鸟教程';
    $username = isset($test) ? $test : 'nobody';
    echo $username, PHP_EOL;
    // echo("<br>");
    $username = $test ?: 'nobody';
    echo $username, PHP_EOL;
    echo("<br>");echo("<br>");echo("<br>");

    $a = 3;
    $b = false;
    $c = $a or $b;
    var_dump($c);          // 这里的 $c 为 int 值3，而不是 boolean 值 true
    $d = $a || $b;
    var_dump($d);//这里的 $d 就是 boolean 值 true 
    ?>
</body>
</html>