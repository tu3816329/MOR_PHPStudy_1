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
$err = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($button) && $button === "Register") {
        $username = $_POST['txtUsername'];
        $password = $_POST['txtPassword'];
        $conPassword = $_POST['txtConfirmPassword'];
        $email = $_POST['txtEmail'];
        $fname = $_POST['txtFullname'];
        $birthday = $_POST['txtDateOfBirth'];
        if ($password !== $conPassword) {
            $_SESSION['errorMessage'] = "Confirm Password must match";
            $err = true;
        }
        if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
            $_SESSION['errorMessage'] = "Email not valid";
            $err = true;
        }
        if (count($con->error_list) > 0) {
            $_SESSION['errorMessage'] = "Connection Error";
            $err = true;
        }
        if ($err) {
            $_SESSION['request'] = $_REQUEST;
            header("Location: " . PAGE_PATH . "Page/Exercise_4.php");
            die();
        } else {
            $hashPassword = password_hash($password,PASSWORD_BCRYPT);
            $sql = "INSERT INTO user(username,password,fullname,email,birthday) VALUES (?, ?, ?, ?, ?)";
            $stm = $con->prepare($sql);
            $stm->bind_param("sssss", $username, $hashPassword, $fname, $email, $birthday) or die("Fail to bind param");
            $stm->execute() or die("Fail to add into database");
            $stm->close();
            session_unset();
            header("Location: " . PAGE_PATH . "Page/Exercise_4_Login.php");
            die();
        }
    }
}