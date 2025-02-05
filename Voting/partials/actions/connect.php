<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "votingsystem";

$connect = mysqli_connect($servername, $username, $password, $database);

if (!$connect) {
    die("Failed to connect with database!");
}
echo "Database connected!";
?>