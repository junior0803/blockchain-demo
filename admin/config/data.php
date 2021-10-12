<?php
error_reporting(0);

$seckey='admin24062020';  // Here is the admin-access key

$servername = "localhost";  // Host
$username = "root";  // User
$password = ''; // Password
$dbname = "blochcha_block5"; // dbname


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$connp = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

?>