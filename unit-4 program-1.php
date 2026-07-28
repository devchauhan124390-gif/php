<html lang="en">
<body>
<?php
$com =new mysqli("Localhost","root","","studen");
if($com->connect_error)
    {
        die("connection failed");
    }
    $sql="SELLECT *FROM STUDENTS3")
    {
        While($row = $result->fetch_assoc())
        {
            echo "ID: "$row["id"] ."<br">
            echho"name: "$row["name"] . "<br>";
            echo"email : "$row["email"] . "<br>";
            echo"city : "$row["city"] . <br><br>";
            }
        else
            {
                echo"No Records Found";
                }
                
        
    }
    