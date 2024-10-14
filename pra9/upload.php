<?php
include 'db.php';

// Handle Image Upload
if (isset($_POST['add_image'])) {
    $image_name = $_POST['image_name'];
    $image_path = 'uploads/' . basename($_FILES['image']['name']);

    // Move the uploaded image to the uploads directory
    if (move_uploaded_file($_FILES['image']['tmp_name'], $image_path)) {
        // Insert image details into the database
        $stmt = $conn->prepare("INSERT INTO images (image_name, image_path) VALUES (?, ?)");
        $stmt->bind_param("ss", $image_name, $image_path);
        $stmt->execute();
        $stmt->close();
        header("Location: gallery.php"); // Redirect to the gallery page after upload
        exit();
    } else {
        echo "Failed to upload image.";
    }
}

$conn->close();
?>
