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
    $x = 5985;
    var_dump($x);
    echo '<br/>';
    
    $x = -345;
    var_dump($x);
    echo('<br/>');

    $x = 0x8c;
    var_dump($x);
    echo('<br/>') ;

    $x = 047;
    var_dump($x);

    $x = 10.365;
    var_dump($x);
    echo "<br>"; 
    $x = 2.4e3;
    var_dump($x);
    echo "<br>"; 
    $x = 8E-5;
    var_dump($x);

    class Car {
        var $color;
        function __construct($color = "green")
        {
            $this->color = $color;
        }
        function what_color() {
            return $this->color;
        }
    }
    function print_vars($obj) {
        foreach (get_object_vars($obj) as $prop => $val) {
            echo "\t$prop = $val\n";
        }
    }

    $herbie = new Car("white");

    print_vars($herbie);

    define ('GREETING', "欢迎访问 Runoob.com", true);
    echo(GREETING);
    echo('<br>');
    echo greeting;
?>
</body>
</html>