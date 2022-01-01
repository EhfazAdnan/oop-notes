<?php
   abstract class Student{

    public $name;
    public $age;

    public function details(){
        echo $this->name. "is" . $this->age . " years old <br>";
    }

    abstract public function School();
   }

   class Boy extends Student{
       public function describe(){
           return parent::details(). "add new string here <br>";
       }

       public function School(){
           return "I like to read story book";
       }
   }

   $boy = new Boy();
   $boy->name = "Test";
   $boy->age = '10';
   echo $boy->describe();
   echo $boy->School();

?>