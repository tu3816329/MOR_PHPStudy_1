<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require '../DBO/Connection.php';
require '../DBO/User.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
//    echo $_POST['btAction'];
    if (isset($_POST['btAction']) && $_POST['btAction'] == "Register Account") {

        $con = connection();
        $username = $_POST['txtUsername'];
        $fullname = $_POST['txtFullname'];
        $email = $_POST['txtEmail'];
        $pass = $_POST['txtPassword'];
        $repass = $_POST['txtRePassword'];
        $birthday = $_POST['txtBirthDay'];
        $rs = $con->query("SELECT * FROM exc3_user WHERE username LIKE '$username'");
        if ($repass !== $pass) {
            print json_encode(["status" => false, "msg" => "Repeat Password must match"]);
            die();
        }
        if ($rs->num_rows > 0) {
            print json_encode(["status" => false, "msg" => "Username existed"]);
            die();
        } else {
            $sql = "INSERT INTO exc3_user (username, password, fullname, email, birthday, avatarUrl) VALUES (?, ?, ?, ?, ?, NULL)";
            $stm = $con->prepare($sql);
            $pass = password_hash($pass, PASSWORD_BCRYPT);
            $stm->bind_param("sssss", $username, $pass, $fullname, $email, $birthday);
            $rs = $stm->execute();
            $stm->close();
            if ($rs == false) {
                echo json_encode(["status" => false, "msg" => "Failed to add to database"]);
            } else {
                setcookie("user", $username, time() + 86400 * 30, "/");
                echo json_encode(["status" => true, "msg" => "Success"]);
            }
        }
    }
}
