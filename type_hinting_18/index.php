<?php
spl_autoload_register(function($class_name){
   include "classes/".$class_name.".php";
});

$nums = array(
    array('value',1,3),
    array('value',1,5)
);

$calculation = new Calculation();
$calculation->getValue($nums);

// object type can be send
// new Java(new Php);

// class Java{
//     public $fromphp;
//     function __construct(Php $value){
//         $this->fromphp = $value;
//         $this->fromphp->framework();
//         $this->fromphp->cms();
//     }
// }

?>