<?php
$conn = new mysqli("localhost", "root", "", "college");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select only 3 records
$sql = "SELECT * FROM students LIMIT 3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Name: " . $row["name"] . "<br>";
        echo "Course: " . $row["course"] . "<hr>";
    }
} else {
    echo "No records found.";
}

$conn->close();
?>