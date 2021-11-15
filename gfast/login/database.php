<?php

$username = "localhost";
$uname = "root";
$password = "";

$db_name = "g-fast";

$con = mysqli_connect($username, $uname, $password, $db_name);

if (!$conn) {
    echo "connection failed!";
}
