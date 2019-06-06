<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DBNAME", "phpexercise");
define("PORT", "3306");
function connection(){
    $db = new mysqli(HOST, USER, PASS, DBNAME, PORT) or die("Fail to connect");
    return $db;    
}
connection();
