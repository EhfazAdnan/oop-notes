<?php
  include "Student.php";

  if(class_exists("Student")){
    $student = new Student();
    if(method_exists($student, 'describe')){
        $student->describe();
    }else{
        echo "Method not found";
    }
    
  }else{
      echo "Class not found";
  }
  


?>