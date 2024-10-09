<?php
    include("include\config.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM tbproduct WHERE pid = $id";
    if ($con->query($sql) === TRUE) {
        header("location: product.php");
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
?>