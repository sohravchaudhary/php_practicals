<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array and String Functions</title>
</head>
<body>
    <h1>PHP Array and String Functions</h1>

    <?php
    // Array Functions
    $numbers = array(1, 2, 3, 4, 5);

    echo "<h2>Array Functions</h2>";
    echo "<p>Original Array: ";
    print_r($numbers);
    echo "</p>";

    // Array Functions
    echo "<p>Array Sum: " . array_sum($numbers) . "</p>"; // Sum of array values
    echo "<p>Array Product: " . array_product($numbers) . "</p>"; // Product of array values
    echo "<p>Max Value: " . max($numbers) . "</p>"; // Maximum value in array
    echo "<p>Min Value: " . min($numbers) . "</p>"; // Minimum value in array
    echo "<p>Sorted Array: ";
    sort($numbers);
    print_r($numbers);
    echo "</p>";

    // String Functions
    $text = "Hello, World!";

    echo "<h2>String Functions</h2>";
    echo "<p>Original String: $text</p>";

    // String Functions
    echo "<p>String Length: " . strlen($text) . "</p>"; // Length of string
    echo "<p>String to Uppercase: " . strtoupper($text) . "</p>"; // Convert to uppercase
    echo "<p>String to Lowercase: " . strtolower($text) . "</p>"; // Convert to lowercase
    echo "<p>String Position of 'World': " . strpos($text, 'World') . "</p>"; // Position of substring
    echo "<p>Replaced String: " . str_replace('World', 'PHP', $text) . "</p>"; // Replace substring
    echo "<p>Substring (0,5): " . substr($text, 0, 5) . "</p>"; // Extract substring
    ?>

</body>
</html>
