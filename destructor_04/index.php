<?php
class Person{
    public $name;
    public $age;
    public $id;

    public function __construct($name,$age){
       $this->name = $name;
       $this->age = $age;

       echo 'from constructor';
    }

    public function setID($id){
        $this->id = $id;
    } 

    public function checkDestructor(){
        if(empty($this->id)){
            echo "value not set";
        }

        if(!empty($this->id)){
            echo "value set <br>";
        }
    }

    public function __destruct(){  // fires in last
        if(!empty($this->id)){
            echo "destructor fires";
        }

        echo 'from destructor';
    }
}

$object = new Person('xyz',10);



?>