<?php session_start() ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercise 4 Login</title>
        <style>
            #information{
                display: none;
            }
            #loginForm{
                display: block;
            }
        </style>
    </head>
    <body>
        <div id="loginForm">
            <h1>Login</h1>
            <form action="../Controller/LoginController.php" method="POST" >           
                <h3>Username</h3>
                <input type="text" name="txtUsername" value="" />
                <h3>Password</h3>
                <input type="password" name="txtPassword" value="" />
                <h3><span style="color: red"><?php echo $_SESSION['errMessage'] ?? "" ?></span></h3>
                <input type="submit" value="Login" name="btAction" />
            </form>
        </div>
        <div id="information">
            <h1>User Information</h1>
            <table border="0">                    
                <tbody>
                    <tr>
                        <td><b>Username</b></td>
                        <td><?php echo $_SESSION['user']['username'] ?? "" ?></td>
                    </tr>

                    <tr>
                        <td><b>Email</b></td>
                        <td><?php echo $_SESSION['user']['email'] ?? "" ?></td>
                    </tr>
                    <tr>
                        <td><b>Fullname</b></td>
                        <td><?php echo $_SESSION['user']['fullname'] ?? "" ?></td>
                    </tr>
                    <tr>
                        <td><b>Date Of Birth</b></td>
                        <td><?php echo $_SESSION['user']['birthday'] ?? "" ?></td>
                    </tr>                     
                </tbody>
            </table>

        </div>
        <?php
        $loginOK = $_SESSION['loginOK'] ?? false;
        if ($loginOK === true) {
            $hidden = '<style type="text/css">#loginForm{display:none;} #information{display:block}</style>';
            echo $hidden;
        } else {
            
        }
        ?>
    </body>
</html>
