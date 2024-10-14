<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        form { width: 300px; margin: 0 auto; }
        input { margin-bottom: 10px; width: 100%; }
        .error { color: red; }
    </style>
</head>
<body>
    <h1>Login</h1>
    <?php
    session_start();

    // Include configuration for credentials
    include('config.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Basic authentication
        if ($username == $valid_username && $password == $valid_password) {
            $_SESSION['loggedin'] = true;
            setcookie('user', $username, time() + 3600, "/"); // Cookie for 1 hour
            header('Location: welcome.php');
            exit();
        } else {
            echo "<p class='error'>Invalid username or password.</p>";
        }
    }
    ?>

    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Login">
    </form>
</body>
</html>
