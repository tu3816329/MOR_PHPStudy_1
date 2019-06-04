<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function connect(){
    $host = 'localhost';
    $username = 'root';
    $password = '';    
    $port = '3306';
    $dbname = 'phpexercise';
    $db = new mysqli($host, $username, $password,$dbname,$port) or die("Cannot connect to the database");
    return $db;
}