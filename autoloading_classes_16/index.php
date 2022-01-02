<?php
spl_autoload_register(function($class_name){
   include "classes/".$class_name.".php";
});

$one = new One();
$two = new Two();
?>