<?php
    include "connect.php";

    $nama = $_POST['nama_yan'];
    $email = $_POST['email_yan'];
    $alamat = $_POST['alamat_yan'];

    $sql = "INSERT INTO tbl_yan VALUES(null, '$nama', '$email', '$alamat')";
    $results = mysqli_query($conn, $sql);

    if(!$results) {
        echo "Add data failed";
    } else {
        echo "Add data success<br>";
        echo "<a href='index.php'>Show Data</a>";
    }
?>