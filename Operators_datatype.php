<!-- <?php
$a=10;
$b=20;
$c=$a+$b;
echo (gettype($c));
echo "sum : ", $a+$b;
echo " difference: ", $a-$b;
echo " multiplication: ", $a*$b;
?> -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['value1'];
    $b = $_POST['value2'];

    $sum = $a + $b;
    $difference = $a - $b;
    $multiplication = $a * $b;
    $division = ($b != 0) ? $a / $b : 'Division by zero error';
    $modulus = $a % $b;
    $exponentiation = $a ** $b;

    echo "Sum: " . $sum . "<br>";
    echo "Difference: " . $difference . "<br>";
    echo "Multiplication: " . $multiplication . "<br>";
    echo "Division: " . $division . "<br>";
    echo "Modulus: " . $modulus . "<br>";
    echo "Exponentiation: " . $exponentiation . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="post" action="">
        <label for="value1">Value 1:</label>
        <input type="number" name="value1" required>
        <br><br>
        <label for="value2">Value 2:</label>
        <input type="number" name="value2" required>
        <br><br>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>