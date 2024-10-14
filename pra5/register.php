<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
</head>
<body>
    <h2>Student Registration Form</h2>
    <form method="POST" action="view_data.php">
        Name: <input type="text" name="name" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        Branch: 
        <select name="branch">
            <option value="CSE">Computer Science Engineering</option>
            <option value="ECE">Electronics & Communication Engineering</option>
            <option value="ME">Mechanical Engineering</option>
        </select><br><br>
        Mobile: <input type="text" name="mobile" required><br><br>
        Address: <textarea name="address" rows="4" cols="30" required></textarea><br><br>
        City:
        <select name="city">
            <option value="Delhi">Delhi</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Bangalore">Bangalore</option>
        </select><br><br>
        Gender:
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female" required> Female<br><br>
        Education:
        <input type="checkbox" name="education[]" value="Science"> Science
        <input type="checkbox" name="education[]" value="Commerce"> Commerce
        <input type="checkbox" name="education[]" value="Arts"> Arts<br><br>
        Degree Program:
        <input type="radio" name="degree" value="BCA" required> BCA
        <input type="radio" name="degree" value="BCom" required> B.Com<br><br>
        Birth Date: <input type="date" name="birthdate" required><br><br>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>
