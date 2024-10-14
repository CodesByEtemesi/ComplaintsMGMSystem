<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Complaint Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Submit Your Complaint</h2>
        <form action="process.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required><br>
            <input type="email" name="email" placeholder="Your Email" required><br>
            <textarea name="complaint" placeholder="Write your complaint here..." rows="5" required></textarea><br>
            <button type="submit">Submit Complaint</button>
        </form>
    </div>
</body>
</html>
