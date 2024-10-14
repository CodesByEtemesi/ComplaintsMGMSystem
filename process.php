<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'student_management');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $complaint = $conn->real_escape_string($_POST['complaint']);

    $sql = "INSERT INTO complaints (name, email, complaint) VALUES ('$name', '$email', '$complaint')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Complaint submitted successfully!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    header('Location: index.php');
}
?>
