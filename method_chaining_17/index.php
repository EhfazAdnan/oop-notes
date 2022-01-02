<?php
spl_autoload_register(function($class_name){
   include "classes/".$class_name.".php";
});

$php = new Php();
$php->framework()->cms();
?>