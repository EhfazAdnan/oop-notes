<?php

// public - can access from any where
// private - only from class not from sub class
// protected - can access from class sub class but not from outside of the class

   class UserData{
       public $user;
       public $userId;

       public $one = 1;
       private $two = 2;
       protected $three = 3;

       public function __construct($userName, $userId){
           $this->user = $userName;
           $this->userId = $userId;
       }

       public function display(){
           echo "Username is {$this->user} and userid is {$this->userId}";
           echo "<br>";
           echo $this->one . 'from class';

           echo "<br>";
           echo $this->two . 'from class';

           echo "<br>";
           echo $this->three . 'from class';
       }
   }

   class Admin extends UserData{
       public $level;

       public function display(){
        echo "Username is {$this->user} and userid is {$this->userId} and level {$this->level}";
        echo "<br>";
        echo $this->one . 'from sub class';

        echo "<br>";
           echo $this->two . 'from sub class';

           echo "<br>";
           echo $this->three . 'from sub class';
    }
   }

   $userDataObj = new Userdata('ParentClass',15);
   $userDataObj->display();
   echo "<br>";
   echo $userDataObj->one;

   echo '<br/>';

   $adminObj = new Admin('subClass',10);
   $adminObj->level = "admin";
   $adminObj->display();
?>