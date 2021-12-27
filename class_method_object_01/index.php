<?php
class Person{  // called class
    public $name = "Property"; // called property
    public $age;  // public, private, protected access modifiers 

    // without access modifier, it works like being public
    public function personName(){  // called method
       echo "Person Name is: " . $this->name;   // $this -> reference of selected object (J Object a kaj kora hoche)
    }

    public function personAge($age){   // take age value from function perameter and assign into in $age property
       $this->age = $age; 
       // echo "Person Age is: " . $this->age;  // echo the age property in line
       echo "Person Age is: " . $this->age = $age;   // another way
    }
}

$personOne = new Person;  // create an object with new keyword
// $personOne->name = "Property";  // also can assign value here
// echo $personOne->name;    // "->" called object operator (echo property value)
$personOne->personName();
echo "<br>";
$personOne->personAge("28");
?>