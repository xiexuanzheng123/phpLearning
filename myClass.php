<?php
    class MyClass {
        public $public = 'Public';
        protected $protected = 'Protected';
        private $private = 'Private';

        function printHello() {
            echo $this->public;
            echo $this->protected;
            echo $this->private;
        }
    }

    $obj = new MyClass();
    echo $obj->public;
    echo $obj->protected; //不能执行 
    echo $obj->private;

    class MyClass2 extends MyClass {
        protected $protected = 'Protected2';

        function printHello () {
            echo $this->public;
            echo $this->protected;
            echo $this->private;
        }
    }

    $obj2 = new MyClass2();
?>