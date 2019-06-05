<?php

if (isset($_POST['date'])) {
    $date = ($_POST['date']);
    echo 'Display date UTC form '. gmdate($date)."<br>";
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $date= strtotime($date);
    echo 'Display date local form '. date("d/m/Y",$date)."<br>";
}
?>