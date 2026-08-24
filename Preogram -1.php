<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

// Establish database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Database connection established successfully!";

// Close connection
$conn->close();

?>