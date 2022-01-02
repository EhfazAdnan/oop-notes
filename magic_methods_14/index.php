<?php
//    __construct();
//    __destruct();
//    __get();
//    __set();
//    __call();

class School{
    public $name;
    public function describe(){
        echo "I am a student<br>";
    }

    public function __get($x){
       echo "$x does not exists";
    }

    public function __set($x, $value){
      echo "we set $x->$value<br>";
    }

    public function __call($x,$value){
        echo 'there no <b>' . $x . '</b> method and arguments: ' .implode(',', $value); 
    }
}

$school = new School();
$school->describe();
$school->testUnfiniedValue;
$school->age = 10;
$school->notExistMethod('2','8','5');

?>