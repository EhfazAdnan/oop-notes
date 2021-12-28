<?php
   class Person{
       public $name;
       public $age;

       public function __construct($name,$age){  // magic method, execute when object initialted for a class
            $this->name = $name;
            $this->age = $age;
       }

       public function personName(){
           echo "Person Name: " . $this->name;
       }

       public function personAge($age){
           echo $this->age = $age;
       }

       public function personDetails(){
           echo "Name : {$this->name} and Age: {$this->age}";
       }
   }

   $personOne = new Person('Name',28);
   $personOne->personDetails();

   // $personOne->name = "Property Name";
   // $personOne->personName();
   // echo "<br/>";
   // $personOne->personAge(28);

?>