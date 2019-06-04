<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
session_unset();
define("PAGE_PATH", "http://localhost/Exercise/Tue6_4_19/");
require '../DBO/Connection.php';
$button = $_REQUEST['btAction'];
$con = connect();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($button) && $button === "Login") {
        $username = $_REQUEST['txtUsername'];
        $password = $_REQUEST['txtPassword'];
        if ($username == null || empty($username) || $password == null || empty($password)) {
            $_SESSION['errMessage'] = "Empty Line";
            header("Location: " . PAGE_PATH . 'Page/Exercise_4_Login.php');
            die();
        }
        $sql = "SELECT * FROM user WHERE username LIKE '$username'";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashPass = $row['password'];
            if (password_verify($password, $hashPass)) {
                $_SESSION['loginOK']=true;
                $_SESSION['user']=$row;
                header("Location: " . PAGE_PATH . 'Page/Exercise_4_Login.php');
                die();
            } else {
                $_SESSION['errMessage'] = "Wrong Password";
                header("Location: " . PAGE_PATH . 'Page/Exercise_4_Login.php');
                die();
            }
        }
    }
}