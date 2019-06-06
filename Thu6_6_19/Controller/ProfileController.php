<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require '../DBO/Connection.php';
require '../DBO/User.php';
if ($_SERVER['REQUEST_METHOD'] === "GET") {
    if (isset($_GET['btAction']) && $_GET['btAction'] == "getUser") {
        $con = connection();
        $username = $_COOKIE['user'];
        $rs = $con->query("SELECT * FROM exc3_user WHERE username LIKE '$username'");
        if ($rs->num_rows > 0) {
            $row = $rs->fetch_assoc();
            $user = new User($username, $row['fullname'], $row['email'], $row['birthday'], $row['avatarUrl']);
            echo json_encode($user);
        }
    }
} elseif ($_SERVER['REQUEST_METHOD'] === "POST") {

    if (isset($_POST['btAction']) && $_POST['btAction'] == "Upload") {        
        $target_dir = getcwd() . "/../Resource/Upload/";
        $target_file = $target_dir . basename($_FILES['imgupload']['name']);
        $img_extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $target_file = $target_dir . $_COOKIE['user'] . "." . $img_extension;
        $check = getimagesize($_FILES['imgupload']['tmp_name']);
        if ($check === false) {

            echo json_encode(["status" => false, "msg" => "File is not an image"]);
            die();
        }
        if (file_exists($target_file)) {
            unlink($target_file);
        }
        if ($_FILES["imgupload"]["size"] > 500000) {
            echo json_encode(["status" => false, "msg" => "Sorry, your file is too large."]);
            die();
        }
        if ($img_extension != "jpg" && $img_extension != "png" && $img_extension != "jpeg" && $img_extension != "gif") {
            echo json_encode(["status" => false, "msg" => "Sorry, only JPG, JPEG, PNG & GIF files are allowed."]);
            die();
        }
        if (move_uploaded_file($_FILES["imgupload"]["tmp_name"], $target_file)) {
            $con = connection();
            $username = $_COOKIE['user'];
            $sql = "UPDATE `exc3_user` SET `avatarUrl` = ? WHERE `exc3_user`.`username` LIKE ?";
            $stm = $con->prepare($sql);
            $img=$username . "." . $img_extension;
            $stm->bind_param("ss", $img, $username);
            $stm->execute() or die("Cannot add to database");
            $stm->close();
            echo json_encode(["status" => true, "msg" => "" . $username . "." . $img_extension]);
        } else {
            echo json_encode(["status" => false, "msg" => "Sorry, there was an error uploading your file."]);
        }
    }
}

