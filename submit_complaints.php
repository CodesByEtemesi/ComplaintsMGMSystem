<?php
$department = $_GET['department'] ?? 'School of Business';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Complaint - <?php echo $department; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Submit Your Complaint - <?php echo $department; ?></h2>
        <form action="process.php" method="POST">
            <input type="hidden" name="department" value="<?php echo $department; ?>">
            <input type="text" name="name" placeholder="Your Name" required><br>
            <input type="email" name="email" placeholder="Your Email" required><br>
            <textarea name="complaint" placeholder="Describe your complaint..." rows="5" required></textarea><br>
            <button type="submit">Submit Complaint</button>
        </form>
    </div>
</body>
</html>
