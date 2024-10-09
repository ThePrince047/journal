<?php
    $con=mysqli_connect("localhost","root","","journal");
    if(!$con){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
<link href="assets\css\bootstrap.min.css" rel="stylesheet"/>