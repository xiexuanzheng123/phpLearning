<?php
    namespace MyProject;
    class test {
        
    }
    function get($classname)
    {
        $a = __NAMESPACE__ . '\\' . $classname;
        return new $a;
    }
    get('test');
?>