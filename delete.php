<?php
    include "connect.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM tbl_yan WHERE id_yan = $id";
    $results = mysqli_query($conn, $sql);

    if(!$results) {
        echo "Delete data failed";
    } else {
        echo "Delete data success<br>";
        echo "<a href='index.php'>Show Data</a>";
    }
?>