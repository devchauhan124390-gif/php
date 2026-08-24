<?php
// Start the session
session_start();

// Create session variables
$_SESSION["username"] = "Dev";
$_SESSION["course"] = "BCA";

echo "Session created successfully.<br>";
echo "Username: " . $_SESSION["username"];
?>