<?php
/* Database connection start */
$servername = "localhost";
$username="manishti_trip";
$password="Password@9245";
$dbname="manishti_trip";
// $username = "root";
// $password = "";
// $dbname = "demos";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>