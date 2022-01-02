<?php
  class Php{
      public function framework(){
          echo 'CakePhp</br>';
          return $this;   // object instance
      }

      public function cms(){
          echo 'WordPress';
          return $this;
      }
    }
?>