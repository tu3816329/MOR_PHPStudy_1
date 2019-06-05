<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_POST['date'])){
    $date = $_POST['date'];
    $date = new DateTime($date);
    $nowDate = new DateTime("now");
    $diff=$nowDate->diff($date);
    echo 'You were born at ' .$date->format("d/m/Y").".<br> Now is ".$nowDate->format("d/m/Y")."<br>";
    echo "Your age is ".$diff->y.
    " years ".$diff->m. 
    " months ".$diff->d." days";
}