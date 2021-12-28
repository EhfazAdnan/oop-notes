<?php
  class CheckConstants{
      public static $name = "XYZ";

      public function displayConst(){
          echo 'Name is: ' .self::$name;
      }

      static function withoutObject(){
          echo 'hello from static method';
      }
  }

  // $object = new CheckConstants;
  // $object->displayConst();

  CheckConstants::withoutObject();  // scope resolution operator

?>