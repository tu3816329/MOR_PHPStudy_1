<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercise 2</title>
    </head>
    <body>
        <h1>Exercise 2</h1>
        <h3>Solving function ax^2 + bx +c = 0</h3>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
            Enter a <br> <input type="text" name="txtA" value="<?php echo $_REQUEST['txtA'] ?? 0 ?>" /><br>
            Enter b <br> <input type="text" name="txtB" value="<?php echo $_REQUEST['txtB'] ?? 0 ?>" /><br>
            Enter c <br> <input type="text" name="txtC" value="<?php echo $_REQUEST['txtC'] ?? 0 ?>" /><br>
            <input type="submit" value="Calculate" name="btSubmit" />
        </form>
        <br>
        <?php
        $a = $_REQUEST['txtA'] ?? 0;
        $b = $_REQUEST['txtB'] ?? 0;
        $c = $_REQUEST['txtC'] ?? 0;
        if (filter_var($a, FILTER_VALIDATE_FLOAT) === false || filter_var($b, FILTER_VALIDATE_FLOAT) === false || filter_var($c, FILTER_VALIDATE_FLOAT) === false) {
            echo '<span style="color:red">Non-Numeric Data<span>';
        } else {
            $delta = $b ** 2 - 4 * $a * $c;
            if ($a == 0 && $b == 0 && $c == 0) {
                echo 'True with any x value';
            } else {
                switch ($delta <=> 0) {
                    case 0:
                        echo 'Result: x= ' . (- $b / (2 * $a));
                        break;
                    case 1:
                        echo 'Result: x1 = ' . (-$b + sqrt($delta)) / (2 * $a) . " AND x2 = " . (-$b - sqrt($delta)) / (2 * $a);
                        break;
                    default:
                        echo 'Result: NONE';
                        break;
                }
            }
        }
        ?>

    </body>
</html>
