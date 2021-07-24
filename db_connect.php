<?php
/* Database connection start */
$servername = "localhost";
$username="*censored for security reasons*";
$password="*censored for security reasons*";
$dbname="manishti_trip";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
