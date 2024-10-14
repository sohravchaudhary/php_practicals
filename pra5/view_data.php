<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Registration Data</title>
</head>
<body>
    <h2>Registered Student Data</h2>

    <?php
    // Check if form data was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve and sanitize form data
        $name = htmlspecialchars($_POST['name']);
        $password = htmlspecialchars($_POST['password']);
        $branch = htmlspecialchars($_POST['branch']);
        $mobile = htmlspecialchars($_POST['mobile']);
        $address = htmlspecialchars($_POST['address']);
        $city = htmlspecialchars($_POST['city']);
        $gender = htmlspecialchars($_POST['gender']);
        $education = implode(", ", $_POST['education']);
        $degree = htmlspecialchars($_POST['degree']);
        $birthdate = htmlspecialchars($_POST['birthdate']);

        // Display the data
        echo "<h3>Registration Successful</h3>";
        echo "<strong>Name:</strong> " . $name . "<br>";
        echo "<strong>Password:</strong> " . $password . "<br>";
        echo "<strong>Branch:</strong> " . $branch . "<br>";
        echo "<strong>Mobile:</strong> " . $mobile . "<br>";
        echo "<strong>Address:</strong> " . $address . "<br>";
        echo "<strong>City:</strong> " . $city . "<br>";
        echo "<strong>Gender:</strong> " . $gender . "<br>";
        echo "<strong>Education:</strong> " . $education . "<br>";
        echo "<strong>Degree Program:</strong> " . $degree . "<br>";
        echo "<strong>Birthdate:</strong> " . $birthdate . "<br>";
    } else {
        // Redirect to form if accessed without submission
        header("Location: register.php");
        exit;
    }
    ?>

</body>
</html>
