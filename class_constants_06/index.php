<?php
  class CheckConstants{
      public $name;
      const Name = "XYZ";

      public function displayConst(){
          echo 'Constant is: ' .CheckConstants::Name;
      }
  }

  $object = new CheckConstants;
  $object->displayConst();
?>