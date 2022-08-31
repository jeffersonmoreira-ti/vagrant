<?php
echo "Testing connection to mysql server<br /> <br />";
$servername = "192.168.100.186";
$username = "phpuser";
$password = "pass";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
echo "Successfully conected!";
?>