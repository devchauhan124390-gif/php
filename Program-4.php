<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statement
$stmt = $conn->prepare(
    "INSERT INTO students (name, course) VALUES (?, ?)"
);

// Bind values
$name = "Dev";
$course = "BCA";

$stmt->bind_param("ss", $name, $course);

// Execute statement
if ($stmt->execute()) {
    echo "Data inserted successfully using Prepared Statement.";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
