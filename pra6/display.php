<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Data</title>
    <style>
        table { width: 50%; margin: 0 auto; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .container { width: 60%; margin: 0 auto; }
    </style>
</head>
<body>
    <h1>Registered Data</h1>
    <div class="container">
        <table>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <?php
            // Retrieve data from POST request
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $confirm_password = htmlspecialchars($_POST['confirm_password']);

            // Basic validation
            $errors = [];
            if ($password !== $confirm_password) {
                $errors['confirm_password'] = 'Passwords do not match!';
            }

            if (empty($errors)) {
                echo "<tr><td>Name</td><td>$name</td></tr>";
                echo "<tr><td>Email</td><td>$email</td></tr>";
                echo "<tr><td>Password</td><td>$password</td></tr>"; // In a real application, passwords should be hashed and not displayed
            } else {
                echo "<tr><td colspan='2'>Error: {$errors['confirm_password']}</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
