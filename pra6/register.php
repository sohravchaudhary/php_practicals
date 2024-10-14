<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        form { width: 300px; margin: 0 auto; }
        input { margin-bottom: 10px; width: 100%; }
        .error { color: red; }
    </style>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="display.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <span class="error"><?php if (isset($errors['name'])) echo $errors['name']; ?></span>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <span class="error"><?php if (isset($errors['email'])) echo $errors['email']; ?></span>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <span class="error"><?php if (isset($errors['password'])) echo $errors['password']; ?></span>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        <span class="error"><?php if (isset($errors['confirm_password'])) echo $errors['confirm_password']; ?></span>

        <input type="submit" value="Register">
    </form>
</body>
</html>
