<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        .gallery img { width: 200px; height: 150px; }
        .form-container { margin: 20px 0; }
    </style>
</head>
<body>
    <h1>Gallery</h1>

    <!-- Add Image Form -->
    <div class="form-container">
        <h2>Add Image</h2>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" required>
            <input type="text" name="image_name" placeholder="Image Name" required>
            <input type="submit" name="add_image" value="Add Image">
        </form>
    </div>

    <?php
    include 'db.php';

    // Handle Image Deletion
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $stmt = $conn->prepare("DELETE FROM images WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
        header("Location: gallery.php"); // Refresh the page after deletion
        exit();
    }

    // Handle Image Update
    if (isset($_POST['update_image'])) {
        $id = $_POST['id'];
        $new_name = $_POST['new_name'];

        $stmt = $conn->prepare("UPDATE images SET image_name = ? WHERE id = ?");
        $stmt->bind_param("si", $new_name, $id);
        $stmt->execute();
        $stmt->close();
        header("Location: gallery.php"); // Refresh the page after update
        exit();
    }

    // Display Images
    $result = $conn->query("SELECT * FROM images");
    if ($result->num_rows > 0) {
        echo "<h2>Gallery</h2>";
        echo "<div class='gallery'>";
        while ($row = $result->fetch_assoc()) {
            echo "<div>
                <img src='" . htmlspecialchars($row['image_path']) . "' alt='" . htmlspecialchars($row['image_name']) . "'>
                <p>" . htmlspecialchars($row['image_name']) . "</p>
                <a href='gallery.php?delete=" . $row['id'] . "'>Delete</a>
                <form action='gallery.php' method='POST'>
                    <input type='hidden' name='id' value='" . $row['id'] . "'>
                    <input type='text' name='new_name' placeholder='New Name' required>
                    <input type='submit' name='update_image' value='Update'>
                </form>
            </div>";
        }
        echo "</div>";
    } else {
        echo "<p>No images found.</p>";
    }

    $conn->close();
    ?>
</body>
</html>
