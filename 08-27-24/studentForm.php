<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
</head>
<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $dob = htmlspecialchars($_POST['dob']);
        $specialization = htmlspecialchars($_POST['specialization']);
        $registration = htmlspecialchars($_POST['registration']);
        $address = htmlspecialchars($_POST['address']);
        $hobbies = htmlspecialchars($_POST['hobbies']);

        echo "<h2>Student Details</h2>";
        echo "Name: " . $name . "<br>";
        echo "Date of Birth: " . $dob . "<br>";
        echo "Specialization: " . $specialization . "<br>";
        echo "Registration Number: " . $registration . "<br>";
        echo "Address: " . $address . "<br>";
        echo "Hobbies: " . $hobbies . "<br><br>";
    }
    ?>

    <h2>Student Registration Form</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
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
