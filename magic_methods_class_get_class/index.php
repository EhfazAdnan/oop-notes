<?php
spl_autoload_register(function($class_name){
   include "classes/".$class_name.".php";
});

class childClass extends Php{
    public function childFunction(){
        echo "Child class constant and class name " . __CLASS__ . "</br>";
        echo "Child class Function and class name " . get_class($this) . "</br>";
    }
}

$child = new childClass;
$child->getClassName();
echo "<br>";
$child->childFunction();

?>