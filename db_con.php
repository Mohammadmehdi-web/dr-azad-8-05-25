<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dr-azad_db";

$con = new mysqli($servername, $username, $password, $database);
$con->set_charset("utf8mb4");

if ($con->connect_error) {
    error_log("Connection failed: " . $con->connect_error); // log error
    die("Connection failed. Please try again later.");
}
?>
