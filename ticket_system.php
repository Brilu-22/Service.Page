<?php
// ticket_system.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Save ticket to database
    $name = $_POST['name'];
    $email = $_POST['email'];
    $issue = $_POST['issue'];
    
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'support_tickets');
    $query = "INSERT INTO tickets (name, email, issue) VALUES ('$name', '$email', '$issue')";
    
    if ($conn->query($query) === TRUE) {
        echo "Ticket Submitted!";
    } else {
        echo "Error: " . $conn->error;
    }
    
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit a Support Ticket</title>
</head>
<body>
    <h1>Submit a Support Ticket</h1>
    <form method="POST" action="">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="issue" placeholder="Describe your issue" required></textarea>
        <button type="submit">Submit Ticket</button>
    </form>
</body>
</html>
