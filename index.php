<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
    echo "Hello World!";
    $x = 5;
    $y = 10;
    function myTest() {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    myTest();
    echo("<br/>");
    echo($y);

    function myTest1() {
        static $x = 0;
        echo $x;
        $x++;
    }
    myTest1();
    myTest1();
    myTest1();


    echo "<h2>PHP 很有趣!</h2>";
    echo "Hello world!<br>";
    echo "我要学 PHP!<br>";
    echo "这是一个", "字符串，", "使用了", "多个", "参数。";

    $txt1="学习 PHP";
    $txt2="RUNOOB.COM";
    $cars=array("Volvo","BMW","Toyota");
    
    echo $txt1;
    echo "<br>";
    echo "在 $txt2 学习 PHP ";
    echo "<br>";
    echo "我车的品牌是 {$cars[0]}";

    print "<h2>PHP 很有趣!</h2>";
    print "Hello world!<br>";
    print "我要学习 PHP!";

$name="runoob";
$a= <<<EOF
    "abc"$name
    "123"
EOF;
// 结束需要独立一行且前后不能空格
echo $a;
?>

</body>
</html>