<?php
// Create a connection to the MySQL database using mysqli
$connection = new mysqli("localhost", "root", "", "donatetheblood");

// Check if the connection was successful
if ($connection->connect_error) {
    die("Database not connected. Error: " . $connection->connect_error);
}
?>