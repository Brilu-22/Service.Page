<?php
include 'includes/connection.php'; // Include the database connection
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Our Virtual Assistant Services</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Administrative Support</h2>
            <p>Calendar management, travel planning, document creation, and data entry.</p>
        </section>
        <section>
            <h2>Customer Service Support</h2>
            <p>Handling customer inquiries, support ticket management, phone call assistance, and live chat support.</p>
        </section>
        <section>
            <h2>Social Media Management</h2>
            <p>Creating and scheduling posts, managing engagement, and developing growth strategies for platforms like Instagram, LinkedIn, and Facebook.</p>
        </section>
        <section>
            <h2>Project Management</h2>
            <p>Task tracking, deadline management, and team coordination through tools like Asana and Trello.</p>
        </section>
        <section>
            <h2>Specialized Support</h2>
            <p>Bookkeeping, CRM management, event planning, and market research.</p>
        </section>
        <button onclick="location.href='contact.php'">Book a Consultation</button> <!-- Link to contact page -->
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Virtual Assistant Services. All rights reserved.</p>
    </footer>
</body>
</html>
