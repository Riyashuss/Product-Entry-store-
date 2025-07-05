<?php
$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "esp32_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from ESP32
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = $_POST["date"];
    $time = $_POST["time"];
    $state = $_POST["state"];
    $count = $_POST["count"];

    // Insert data into the database
    $sql = "INSERT INTO led_data (date, time, state, count) VALUES ('$date', '$time', '$state', $count)";

    if ($conn->query($sql) === TRUE) {
        echo "Data saved successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
