<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercise 3</title>
    </head>
    <body>
        <h3>Exercise 3</h3>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            Enter Paragraph: <br> 
            <textarea style="width: 500px;height: 300px" name="txtArea"><?php echo $_REQUEST['txtArea']??"" ?></textarea>
            <br>            
            <input type="text" value="<?php echo $_REQUEST['txtNum'] ?? "" ?>" name="txtNum" />
            <input type="submit" value="Get Random Chars" name="btSubmit" />
        </form>
        <br>
        <?php
        $num = $_REQUEST['txtNum'];
        $text = $_REQUEST['txtArea'];
        if (filter_var($num, FILTER_VALIDATE_INT) !== false) {
            if ($num > strlen($text)) {
                echo "Larger than text's length";
            } else {
                echo "Random chars: ";
                for ($count = 0; $count < $num; $count++) {
                    echo substr(str_shuffle($text),0,1).'_';
                }
            }
        } else {
            echo 'Non-numeric Data';
        }
        ?>
    </body>
</html>
