//Connecting to the database
<?php
$servername = "localhost";
$username = "root"; //edit if you have set a username for MySQL
$password = ""; // edit if you have set a password
$dbname = "simplesched";

// Create connection syntax
$conn = new mysqli($slno, $day, $period, $plan);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>