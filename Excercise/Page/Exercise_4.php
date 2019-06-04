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
        <title>Exercise 4</title>
        <style>
            #form.h3{                
            }
            #form td{
                align-content: center;
            }
        </style>
    </head>
    <body>
        <div id="form">
            <h3>Register Account</h3>
            <form action="../Controller/RegisterController.php" method="POST">
                <table border="0">                    
                    <tbody>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="txtUsername" value="<?php echo $_SESSION['request']['txtUsername'] ?? "" ?>" /></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="txtPassword" value="<?php echo $_SESSION['request']['txtPassword'] ?? "" ?>" /></td>
                        </tr>
                        <tr>
                            <td>Confirm Password</td>
                            <td><input type="password" name="txtConfirmPassword" value="<?php echo $_SESSION['request']['txtConfirmPassword'] ?? "" ?>" /></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="txtEmail" value="<?php echo $_SESSION['request']['txtEmail'] ?? "" ?>" /></td>
                        </tr>
                        <tr>
                            <td>Fullname</td>
                            <td><input type="text" name="txtFullname" value="<?php echo $_SESSION['request']['txtFullname'] ?? "" ?>" /></td>
                        </tr>
                        <tr>
                            <td>Date Of Birth</td>
                            <td><input type="date" name="txtDateOfBirth" value="<?php echo $_SESSION['request']['txtDateOfBirth'] ?? "" ?>" /></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center"> <span style="color: red"><?php echo $_SESSION['errorMessage'] ?? ""; ?></span></td>
                        </tr>
                        <tr>                           
                            <td colspan="2" style="text-align: center"><input type="submit" value="Register" name="btAction" /></td>
                        </tr>
                    </tbody>
                </table>                
            </form>
        </div>
    </body>
</html>
