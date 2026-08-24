<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

try {
    // Create connection
    $conn = new PDO(
        "mysql:host=$servername;dbname=$dbname",
        $username,
        $password
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Insert data
    $sql = "INSERT INTO students (name, course)
            VALUES ('Dev', 'BCA')";

    $conn->exec($sql);

    echo "Data inserted successfully.";
}
catch (PDOException $e) {
    echo " " . $e->getMessage();
}
?>