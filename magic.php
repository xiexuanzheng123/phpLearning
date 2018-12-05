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
    echo('这是第“ ' . __LINE__ . ' "行');
    echo "<br/>";
    echo('该文件位于“ ' . __FILE__ . ' "');
    echo "<br/>";
    echo('该文件位于“ ' . __DIR__ . ' "');
    echo "<br/>";

    class Base {
        public function sayHello() {
            echo 'Hello';
        }
    }
    trait SayWorld {
        public function sayHello() {
            parent::sayHello();
            echo('World');
        }
    }

    class MyHelloWorld extends Base {
        use SayWorld;
    }

    $o = new MyHelloWorld();
    $o->sayHello();
?>
</body>
</html>