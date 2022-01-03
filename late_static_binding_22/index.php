<?php
spl_autoload_register(function($class_name){
   include "classes/".$class_name.".php";
});

class PersonChild extends Person{
    public static function getClass(){
        return __CLASS__;
    }
}

$person = new Person();
$person->framework();

$personChild = new PersonChild();
$personChild->framework();

?>