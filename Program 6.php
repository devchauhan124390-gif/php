<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Marwadi college";

try {
    // Create connection
    $conn = new PDO(
        "mysql:host=$servername;dbname=$dbname",
        $username,
        $password
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Update data
    $sql = "UPDATE students 
            SET name='Dev', course='BCA' 
            WHERE id=1";

    $conn->exec($sql);

    echo "Data updated successfully.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>