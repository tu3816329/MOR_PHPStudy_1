<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function connect() {
    $host = "localhost";
    $databaseName = "phpexercise";
    $username = "root";
    $password = "";
    $port = "3306";
    $db = new mysqli($host, $username, $password, $databaseName, $port) or die("Cannot Connect To Database");
    return $db;
}
