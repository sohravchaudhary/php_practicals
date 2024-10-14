<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Conditional Statements</title>
</head>
<body>
    <h1>PHP Conditional Statements</h1>

    <?php
    // Define a variable for testing
    $score = 85;

    echo "<h2>Conditional Statements</h2>";

    // Example of if-else if-else
    if ($score >= 90) {
        echo "Grade: A";
    } elseif ($score >= 80) {
        echo "Grade: B";
    } elseif ($score >= 70) {
        echo "Grade: C";
    } elseif ($score >= 60) {
        echo "Grade: D";
    } else {
        echo "Grade: F";
    }

    // Example of nested if
    echo "<h2>Nested If Statement</h2>";
    $age = 22;
    $hasID = true;

    if ($age >= 18) {
        if ($hasID) {
            echo "Access granted. You are allowed to enter.";
        } else {
            echo "Access denied. You need an ID.";
        }
    } else {
        echo "Access denied. You must be at least 18 years old.";
    }

    // Example of the ternary operator
    echo "<h2>Ternary Operator</h2>";
    $isLoggedIn = true;
    $message = $isLoggedIn ? "Welcome back!" : "Please log in.";
    echo $message;
    ?>

</body>
</html>
