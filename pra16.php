<?php
// Write to the file
$fp = fopen('data.txt', 'w'); // Open the file for writing
if ($fp) {
    fwrite($fp, 'hello '); // Write the first line to the file
    fwrite($fp, 'this php file read write methods...'); // Write the second line
    fclose($fp); // Close the file
    echo "File written successfully <br>"; // Output a success message
} else {
    echo "Failed to open the file for writing.<br>"; // Error message if file open fails
}
?>

<?php
// Read the file
$filename = "data.txt"; // The name of the file to read
if (file_exists($filename)) {
    $handle = fopen($filename, "r"); // Open the file for reading
    if ($handle) {
        $contents = fread($handle, filesize($filename)); // Read the file contents
        echo $contents; // Display the contents
        fclose($handle); // Close the file
    } else {
        echo "Failed to open the file for reading.<br>"; // Error message if file open fails
    }
} else {
    echo "File does not exist.<br>"; // Error message if file does not exist
}
?>
