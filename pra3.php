<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays and Foreach Loop</title>
</head>
<body>
    <h1>PHP Arrays and Foreach Loop</h1>

    <?php
    // Indexed Array
    $fruits = array("Apple", "Banana", "Cherry");

    echo "<h2>Indexed Array</h2>";
    echo "<ul>";
    foreach ($fruits as $fruit) {
        echo "<li>$fruit</li>";
    }
    echo "</ul>";

    // Associative Array
    $person = array(
        "first_name" => "John",
        "last_name" => "Doe",
        "age" => 30
    );

    echo "<h2>Associative Array</h2>";
    echo "<ul>";
    foreach ($person as $key => $value) {
        echo "<li>$key: $value</li>";
    }
    echo "</ul>";

    // Multidimensional Array
    $employees = array(
        array("name" => "Alice", "position" => "Developer", "salary" => 50000),
        array("name" => "Bob", "position" => "Designer", "salary" => 45000),
        array("name" => "Charlie", "position" => "Manager", "salary" => 60000)
    );

    echo "<h2>Multidimensional Array</h2>";
    echo "<ul>";
    foreach ($employees as $employee) {
        echo "<li>";
        foreach ($employee as $key => $value) {
            echo "$key: $value, ";
        }
        echo "</li>";
    }
    echo "</ul>";
    ?>

</body>
</html>
