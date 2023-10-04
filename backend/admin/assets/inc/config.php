<?php
$servername="localhost";
$username="saiful";
$password="saiful123";
$dbname="hmisphp";

$mysqli=mysqli_connect($servername,$username, $password, $dbname);

if(!$mysqli) {
    die("connection failed: " . mysqli_connect_error ());
}
?>
