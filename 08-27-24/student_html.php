<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
</head>
<body>
    <h2>Student Registration Form</h2>
    <form action="submit_student.php" method="POST">
        <label for="name">Student Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="dob">Date of Birth:</label><br>
        <input type="date" id="dob" name="dob" required><br><br>

        <label for="specialization">Specialization:</label><br>
        <input type="text" id="specialization" name="specialization" required><br><br>

        <label for="registration">Registration Number:</label><br>
        <input type="text" id="registration" name="registration" required><br><br>

        <label for="address">Address:</label><br>
        <textarea id="address" name="address" required></textarea><br><br>

        <label for="hobbies">Hobbies:</label><br>
        <input type="text" id="hobbies" name="hobbies" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
