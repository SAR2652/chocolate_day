<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="chocolate_day";

//Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    //echo "Not connected";
} 
//echo "Connected successfull\n";
