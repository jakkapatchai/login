<?php
    $con = mysqli_connect("localhost","root","","logins");

    if(mysqli_connect_error()){
        echo "Failed to connect to MySQL: " . mysqli_connct_error();
    }
?>