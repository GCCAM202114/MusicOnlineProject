<?php

$hn = "localhost";
$un = "Music_Admin";
$pw = "4L3IFQu]Gy]zo2XH";
$db = "musiconline_am";

$conn = new mysqli($hn, $un, $pw, $db);

if($conn->connect_error) {
    die("Connection Failed: ". $db->connect_error);
}
    else{
        echo("Connection successful");
    }
    ?>