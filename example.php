<?php
    class classname1 {
        function __construct()
        {
            echo __METHOD__, "\n";
        }
    }
    function funcname() {
        echo __FUNCTION__, "\n";
    }
    const constname = "global";

    $a = 'classname1';
    $obj = new $a;
    $b = 'funcname';
    $b();
    echo constant('constname'), "\n";
?>