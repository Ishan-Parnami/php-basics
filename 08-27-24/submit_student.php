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
    echo "Hobbies: " . $hobbies . "<br>";
}
?>
