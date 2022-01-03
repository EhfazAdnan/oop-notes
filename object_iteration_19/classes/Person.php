<?php
  class Person{
      public $Name = "Test";
      public $Age = "16";
      public $Skill = "music";

      private $Email = "test@test.com";
      protected $Password = "123456";

      function iteratorInner(){
        echo "Inside class</br>";
        foreach($this as $key => $value){
          echo "<pre>";
          echo "$key => $value";
          echo "</pre>";
      }
    }
    
  }



?>