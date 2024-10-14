<?php
// Database connection settings
$servername = "localhost"; // Change this to your server name
$username = "your_username"; // Your database username
$password = "your_password"; // Your database password
$dbname = "school_of_technologyY"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch complaints from the database
$result = $conn->query("SELECT name, registration_number, email, complaint FROM complaints ORDER BY created_at DESC");

$complaints = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $complaints[] = $row;
    }
}

// Return complaints as JSON
header('Content-Type: application/json');
echo json_encode($complaints);

// Close the connection
$conn->close();
?>
