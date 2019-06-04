<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercise_1</title>
    </head>
    <body>
        <h1>Exercise 1</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
            Enter x <br> <input type="text" name="txtX" value="<?php echo $_REQUEST['txtX'] ?? 0 ?>" /><br>
            Enter y <br> <input type="text" name="txtY" value="<?php echo $_REQUEST['txtY'] ?? 0 ?>" /><br>
            <input type="submit" value="Calculate" name="btSubmit" />
        </form>
        <br>
        <?php
        $x = $_REQUEST['txtX'] ?? 0;
        $y = $_REQUEST['txtY'] ?? 0;
        if (filter_var($x, FILTER_VALIDATE_FLOAT) === false || filter_var($y, FILTER_VALIDATE_FLOAT) === false) {
            echo '<span style="color:red">Non-Numeric Data<span>';
        } else {
            echo "SUM: " . ($x + $y) . "<br>";
            echo "SUBTRACT: " . ($x - $y) . "<br>";
            echo "MULTIPLY: " . ($x * $y) . "<br>";
            echo "DIVIDE: " . ($y == 0 ? "NAN" : ($x / $y)) . "<br>";
        }
        ?>
    </body>
</html>
