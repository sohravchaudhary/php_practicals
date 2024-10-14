<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Control Statements</title>
</head>
<body>
    <h1>PHP Control Statements</h1>
    
    <?php
    // Example of if-else
    $age = 20;

    echo "<h2>If-Else Statement</h2>";
    if ($age >= 18) {
        echo "You are an adult.";
    } else {
        echo "You are not an adult.";
    }

    // Example of switch
    $day = date("l");

    echo "<h2>Switch Statement</h2>";
    switch ($day) {
        case "Monday":
            echo "Today is Monday.";
            break;
        case "Tuesday":
            echo "Today is Tuesday.";
            break;
        case "Wednesday":
            echo "Today is Wednesday.";
            break;
        default:
            echo "Today is another day.";
            break;
    }

    // Example of for loop
    echo "<h2>For Loop</h2>";
    echo "<ul>";
    for ($i = 1; $i <= 5; $i++) {
        echo "<li>Item $i</li>";
    }
    echo "</ul>";

    // Example of while loop
    echo "<h2>While Loop</h2>";
    $count = 1;
    echo "<ul>";
    while ($count <= 5) {
        echo "<li>Count $count</li>";
        $count++;
    }
    echo "</ul>";
    ?>

</body>
</html>
