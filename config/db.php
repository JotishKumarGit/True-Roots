<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'himawatorganic';

$con = mysqli_connect($host, $user, $password, $dbname);

if (!$con) {
    echo "<script>alert('Database is not connected')</script>";
} else {
    // echo "<script>alert('Database is connected')</script>";
}

?>




