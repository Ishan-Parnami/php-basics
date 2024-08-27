<?php
$year=2012;
if(($year %400 == 0) || (($year % 100 != 0) && ($year % 4 == 0))){
    echo "$year is a leap year.";
} else {
    echo "$year is not a leap year.";
}
?>
<?php
$x = array("a"=>"Red", "b"=>"Green", "c"=>"Blue");
$y = array("u"=>"Yellow", "v"=>"Orange", "w"=>"Pink");
$z = $x+$y;

foreach($z as $key => $value) {
    echo "Key=" . $key . ", Value=" . $value . "<br>";
}

var_dump($z)."<br>";
var_dump($x == $y)."<br>";
var_dump($x === $y)."<br>";
var_dump($x != $y)."<br>";
var_dump($x <> $y)."<br>"; 
var_dump($x !== $y)."<br>";
?>

<?php
$x = `date`;
echo $x."<br>";
echo "Today is " . date("l") . "<br>";

$a=-5;
echo abs($a)."<br>";
$arr=[12,7,5,24,34];
echo max($arr)."<br>";
echo min($arr)."<br>";
$b=6.254;
echo round($b,2)."<br>";
echo ceil($b)."<br>";
echo floor($b)."<br>";
$deg=45;
echo "Radians : ", deg2rad($deg)."<br>";
$n=10;
$d=3;
echo " interger division reuslt : ", intdiv($n, $d)."<br>";
echo " power : ". pow(2,3)."<br>";
echo " logirithm : ". log10(100)."<br>";
echo " exponantial : ". exp(1)."<br>";
echo "Degree to radian=", rad2deg(1.5707),"<br>";
echo "Decimal to binary=", decbin(10),"<br>";
echo "binary to decimal=", bindec(1010),"<br>";
echo "value of pi=", pi(), "<br>";
echo "sqaure root value is:",sqrt(5),"<br>";
echo "remainder=",fmod(10,3),"<br>";


# find the area of rectangle
$length = 5;
$width = 10;
$area = $length * $width;

echo "The area of the rectangle is: $area square units";    
?>