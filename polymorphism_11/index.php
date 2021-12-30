<?php
  // the basic of polymorphism is inheritence and overridden methods
  class UserData{
    public $user;
    public $userId;

    public function __construct($userName, $userId){
        $this->user = $userName;
        $this->userId = $userId;
    }

    public function display(){
        echo "Username is {$this->user} and userid is {$this->userId}";
    }
}

class Admin extends UserData{
    public $level;

    public function display(){
     echo "Username is {$this->user} and userid is {$this->userId} and level {$this->level}";
 }
}

$userDataObj = new Userdata('ParentClass',15);
$userDataObj->display();

echo '<br/>';

$adminObj = new Admin('subClass',10);
$adminObj->level = "admin";
$adminObj->display();
?>