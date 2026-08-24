<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "college";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Database connected successfully!";

// Close connection
$conn->close();
?>