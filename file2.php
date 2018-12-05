<?php
    namespace Foo\Bar;
    include 'file1.php';

    const FOO = 2;

    function foo() {
        echo ('FOO\Bar');
    }

    class foo {
        static function staticmethod() {}
    }

    foo();
    echo("<br/>");
    echo(FOO);
    echo("<br/>");
    
    subnamespace\foo();
?>