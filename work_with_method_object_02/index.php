<?php include_once "functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
       <table>
           <tr>
               <td>Enter first Number: </td>
               <td><input type="number" name="num1"></td>
           </tr>

           <tr>
               <td>Enter Second Number: </td>
               <td><input type="number" name="num2"></td>
           </tr>

           <tr>
               <td></td>
               <td><input type="submit" name="calculation" value="Calculate"></td>
           </tr>
       </table>
    </form>

    <?php
       if(isset($_POST['calculation'])){
           $numOne = $_POST['num1'];
           $numTwo = $_POST['num2'];

           if(empty($numOne) or empty($numOne)){
               echo "<span style='color:#EE6554'>Field must not be empty!</span><br>";
           }

           $cal = new Calculation;
           $cal->add($numOne, $numTwo);
       }

    ?>

</body>
</html>