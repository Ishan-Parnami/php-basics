<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Calculator</title>
</head>
<body>
    <h1>Area Calculator</h1>
    <form method="post" action="">
        <label for="value1">Value 1 : </label>
        <input type="number" name="value1" required>
        <br><br>
        <label for="value2">Value 2 : </label>
        <input type="number" name="value2">
        <br><br>
        <input type="submit" name="shape" value="Square">
        <input type="submit" name="shape" value="Rectangle">
        <input type="submit" name="shape" value="Circle">
        <input type="submit" name="shape" value="Triangle">
    </form>
</body>
</html>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['value1'];
    $b = $_POST['value2'];
    $shape = $_POST['shape'];

    if($shape == "Square"){
        $area = $a * $a;
        echo "The area of the square is: $area square units";
    } elseif($shape == "Rectangle"){
        $area = $a * $b;
        echo "The area of the rectangle is: $area square units";
    } elseif($shape == "Circle"){
        $area = round(pi() * $a * $a, 2);
        
        echo "The area of the circle is: $area square units";
    } elseif($shape == "Triangle"){
        $area = 0.5 * $a * $b;
        echo "The area of the triangle is: $area square units";
    }
}
?>