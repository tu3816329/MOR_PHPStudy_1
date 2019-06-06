<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require '../DBO/Connection.php';
require '../DBO/User.php';
if ($_SERVER['REQUEST_METHOD'] === "GET") {
    if (isset($_GET['btAction']) && $_GET['btAction'] == "getAll") {
        $con = connection();
        $rs = $con->query("SELECT * FROM exc3_user");
        if ($rs->num_rows > 0) {
            while ($row = $rs->fetch_assoc()) {
                $arr[] = $row;
            }
            echo json_encode($arr);
        }
    } elseif (isset($_GET['btAction']) && $_GET['btAction'] == "getUser") {
        $con = connection();
        $username = $_COOKIE['user'];
        $rs = $con->query("SELECT * FROM exc3_user WHERE username LIKE '$username'");
        if ($rs->num_rows > 0) {
            $row = $rs->fetch_assoc();
            $user = new User($username, $row['fullname'], $row['email'], $row['birthday'], $row['avatarUrl']);
            echo json_encode($user);
        }
    }
}