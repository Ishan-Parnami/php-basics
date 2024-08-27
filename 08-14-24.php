<!-- 
<?php
$i = 1;
do{
    $i++;
    echo "the number is $i <br>";
} while($i <= 4); 



?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <h3>Table</h3>
    <form method="post" action="">
        <label for="value1">Value : </label>
        <input type="number" name="value1" required>
        <br><br>
        <input type="submit" name="cal" value="Calculate">
    </form>
</body>
</html>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['value1'];
    $cal = $_POST['cal'];
    if ($cal == "Calculate") {
        for ($i = 1, $j = 1; $i <= 10 && $j <= $i; $i++, $j++) {
            echo "$a * $j = " . ($a * $j) . "<br>";
        }
    }
}

//foreach
$color = array("red", "green", "blue");
echo "<br>Using foreach loop<br>";
foreach($color as $v) echo "$v <br>";
echo "<br>Using for loop<br>";
for($i = 0; $i < sizeof($color); $i++) echo "$color[$i] <br>";

echo "<br>Example associative array<br>";
$person = [
    "name" => "Ishan",
    "age" => 25,
    "city" => "Jabalpur",
    "email" => "ishanp556@gmail.com"
];

echo "<br>Using foreach loop to iterate over key-value pairs<br>";
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}

$num = 23;
$isPrime = true;

for($i = 2; $i <= sqrt($num); $i++){
    if($num % $i == 0){
        $isPrime = false;
        break;
    }
}

if ($isPrime && $num > 1) {
    echo "$num is a prime number";
} else {
    echo "$num is not a prime number";
}
?>