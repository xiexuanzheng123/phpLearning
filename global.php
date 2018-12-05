<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="get.php?subject=PHP&web=runoob.com">Test $GET</a>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>
    <?php
    // $x = 75;
    // $y = 25;
    // function addition() {
    //     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    // }
    // echo $_SERVER['PHP_SELF'], 'PHP_SELF';
    // echo "<br>";
    // echo $_SERVER['SERVER_NAME'];
    // echo "<br>";
    // echo $_SERVER['HTTP_HOST'];
    // echo "<br>";
    // echo $_SERVER['HTTP_REFERER'];
    // echo "<br>";
    // echo $_SERVER['HTTP_USER_AGENT'];
    // echo "<br>";
    // echo $_SERVER['SCRIPT_NAME'];

    $name = $_POST['fname'];
    echo $name; 
    
?>
</body>
</html>