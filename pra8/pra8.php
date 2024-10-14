<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <style>
        form { width: 300px; margin: 0 auto; }
        input, textarea { margin-bottom: 10px; width: 100%; }
        .message { color: green; }
        .error { color: red; }
    </style>
</head>
<body>
    <h1>Feedback Form</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Database connection
        $servername = "localhost";
        $username = "root"; // Default XAMPP username
        $password = ""; // Default XAMPP password
        $dbname = "feedback_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve and sanitize input
        $name = $conn->real_escape_string($_POST['name']);
        $email = $conn->real_escape_string($_POST['email']);
        $feedback = $conn->real_escape_string($_POST['feedback']);

        // Insert data into database
        $sql = "INSERT INTO feedback (name, email, feedback) VALUES ('$name', '$email', '$feedback')";
        if ($conn->query($sql) === TRUE) {
            echo "<p class='message'>Thank you for your feedback!</p>";
        } else {
            echo "<p class='error'>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }

        // Close connection
        $conn->close();
    }
    ?>

    <form action="pra8.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="feedback">Feedback:</label>
        <textarea id="feedback" name="feedback" rows="4" required></textarea>
        
        <input type="submit" value="Submit Feedback">
    </form>
</body>
</html>
