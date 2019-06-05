<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../DBO/Connection.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $target_dir = getcwd() . "\\..\\Resource\\Upload\\";
    if (isset($_POST['btAction']) && $_POST['btAction'] == "Save") {
        $target_file = $target_dir . basename($_FILES['fImg']['name']);
        $img_extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $target_file = $target_dir . $_POST['txtUsername'] . "." . $img_extension;
        $check = getimagesize($_FILES['fImg']['tmp_name']);
        if ($check === false) {
            echo "File is not an image";
            die();
        }
        if (file_exists($target_file)) {
            unlink($target_file);
        }
        if ($_FILES["fImg"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            die();
        }
        if ($img_extension != "jpg" && $img_extension != "png" && $img_extension != "jpeg" && $img_extension != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            die();
        }
        $con = connect();
        $username = $_POST['txtUsername'];
        $imgName = $username . "." . $img_extension;
        $rs = $con->query("Select * From exc2_image WHERE username LIKE '$username'");
        if (($rs->num_rows) > 0) {
            $sql = "UPDATE exc2_image SET imageURL = (?) WHERE username = '$username'";
            $stm = $con->prepare($sql);
            $stm->bind_param('s', $imgName);
            $stm->execute();
        } else {
            $sql = "INSERT INTO exc2_image(username,imageUrl) VALUES(?,?)";
            $stm = $con->prepare($sql);
            $stm->bind_param('ss', $username, $imgName);
            $stm->execute();
        }
        if (move_uploaded_file($_FILES["fImg"]["tmp_name"], $target_file)) {
            echo "The file " . $imgName . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    if (isset($_POST['btAction']) && $_POST['btAction'] == "Show") {
        $con = connect();
        $username = $_POST['txtUsername'];
        $rs = $con->query("Select * From exc2_image WHERE username LIKE '$username'");
        if (($rs->num_rows) > 0) {
            echo " <img src='" . $_SERVER["REQUEST_URI"] . "\\..\\..\\Resource\\Upload\\" .
            $rs->fetch_assoc()['imageUrl'] . "' id='image' width='400px' height='400px'/><br>";
        } else {
            echo 'There is no image for this user';
        }
    }
}
