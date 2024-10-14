<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        .container { width: 300px; margin: 0 auto; }
        .message { margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome</h1>
        <?php
        session_start();

        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
            header('Location: login.php');
            exit();
        }

        if (isset($_COOKIE['user'])) {
            echo "<p class='message'>Hello, " . htmlspecialchars($_COOKIE['user']) . "!</p>";
        }

        // Logout link
        echo '<a href="logout.php">Logout</a>';
        ?>
    </div>
</body>
</html>
