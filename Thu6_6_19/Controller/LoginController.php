<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require '../DBO/Connection.php';
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_POST['btAction']) && $_POST['btAction'] === "Login") {
        
        $username = $_POST["txtUsername"];
        $pass = $_POST["txtPassword"];
        $con = connection();
        $rs = $con->query("SELECT * FROM exc3_user WHERE username LIKE '$username'");
        if ($rs->num_rows > 0) {
            if (password_verify($pass, $rs->fetch_assoc()['password'])) {
                setcookie("authen", "1", time() + 86400 * 30, "/");
                setcookie("user", $username, time() + 86400 * 30, "/");
                echo json_encode(["status" => true, "msg" => "Login in"]);
                die();
            } else {
                echo json_encode(["status" => false, "msg" => "Incorrect Password Or Username"]);
                die();
            }
        }
    }
}
