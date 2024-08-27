<?php
define("WISHES", "Good Evening");
echo WISHES, "<Br>";
echo constant("WISHES");
echo "<br>"
// both are similar
?>

<?PHP
echo "The line Number is: ",__line__;
echo "<br>";
echo "The line Number is: ",__file__;
echo "<br>";
echo "The line Number is: ",__class__;
echo "<br>";
echo "The line Number is: ",__function__;
echo "<br>";
echo "The line Number is: ",__method__;
echo "<br>";
echo "The line Number is: ",PHP_VERSION;
echo "<br>";
echo "The line Number is: ",__dir__;
echo "<br>";
?>

<?php
define("courses", [
    "PHP",
    "HTML",
    "CSEE"
]);
echo courses[0];


//php oprators
$x=10;
$r=($x%2==0)? "true":"false";
echo $r;

?>