<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbhome = "db_173";

    $conn = mysqli_connect($host, $user, $password, $dbhome);
    if(!$conn) {
        echo "Failed to connect database";
    }
?>