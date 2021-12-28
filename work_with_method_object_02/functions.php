<?php
class Calculation{

    function add($a,$b){
        $sum = $a + $b;
       echo "Summation is :" . $sum . "<br>";
    }

    function sub($a,$b){
       echo "Subtraction is :" . ($a - $b) . "<br>";
    }

    function mul($a,$b){
        echo "Multiplication is :" . ($a * $b) . "<br>";
    }

    function div($a,$b){
        echo "Division is :" . ($a / $b) . "<br>";
    }
}

?>