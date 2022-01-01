<?php

// interface - keyword implements

interface School{
    public function mySchool();
}

interface College{
    public function myCollege();
}

interface Varcity{
    public function myVarcity();
}

class Teacher implements School, College, Varcity{
    public function __construct(){
       $this->mySchool();
       $this->myCollege();
       $this->myVarcity();
    }

    public function mySchool(){
        echo "I am a school teacher<br>";
    }

    public function myCollege(){
        echo "I am a college teacher<br>";
    }

    public function myVarcity(){
        echo "I am a vercity teacher<br>";
    }
}

class Teacher2 implements School, College, Varcity{
    public function __construct(){
       $this->mySchool();
       $this->myCollege();
       $this->myVarcity();
    }

    public function mySchool(){
        echo "I am a school teacher<br>";
    }

    public function myCollege(){
        echo "I am a college teacher<br>";
    }

    public function myVarcity(){
        echo "I am a vercity teacher<br>";
    }
}

$teacher = new Teacher();
$teacher = new Teacher2();