<?php
$servername = "mydb-umd.cibvjaqchmql.us-east-1.rds.amazonaws.com:3306"; //or localhost
// Enter your MySQL username below(default=root)
$username = "root";
// Enter your MySQL password below
$password = "password"; //no password for localhost
$dbname = "umd-db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    header("location:connection_error.php?error=$conn->connect_error");
    die($conn->connect_error);
}
?>
