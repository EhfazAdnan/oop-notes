<?php
  abstract class Php{
      public function getClassName(){
         echo "Base class constant and class name " . __CLASS__ . "</br>";
         echo "Base class Function and class name " . get_class($this) . "</br>";
      }
  }
?>