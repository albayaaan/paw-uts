<?php
    include "connect.php";

    $id = $_POST['id_yan'];
    $nama = $_POST['nama_yan'];
    $email = $_POST['email_yan'];
    $alamat = $_POST['alamat_yan'];

    $sql = "UPDATE tbl_yan SET nama_yan = '$nama', email_yan = '$email', alamat_yan = '$alamat' WHERE id_yan = $id";
    $results = mysqli_query($conn, $sql);

    if(!$results) {
        echo "Update data failed";
    } else {
        echo "Update data success<br>";
        echo "<a href='index.php'>Show Data</a>";
    }
?>