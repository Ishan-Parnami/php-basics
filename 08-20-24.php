<?php
//     declare(strict_types=1);
// function discounted($discount){
//     return (100 - $discount) * 3500 / 100;
// }

// echo "enter the discount in percentage : ";

// $discount = trim(fgets(STDIN));

// echo "Discounted price : " . discounted($discount);

// function addNumber(int $a, int $b): int {
//     return $a + $b;
// }

// try {
//     echo addNumber(5, "5 is not a number"); # it will give an error as strict mode is on
// } catch (TypeError $e) {
//     echo "Error: " . $e->getMessage();
// }

# Q - check palindrome
// function isPalindrome($num){
//     $num = strval($num);
//     $len = strlen($num);
//     for($i = 0; $i < $len/2; $i++){
//         if($num[$i]!= $num[$len - $i - 1]){
//             return false;
//         }
//     }
//     return true;
// }

// echo "Enter the number / string :";
// $val = trim(fgets(STDIN));

// if(isPalindrome($val)){
//     echo "The given number/string is a palindrome.";
// } else {
//     echo "The given number/string is not a palindrome.";
// }


// # Q - reverse a string
// function reverseString($str){
//     $rev = "";
//     $len = strlen($str);
//     for($i = $len - 1; $i >= 0; $i--){
//         $rev.= $str[$i];
//     }
//     return $rev;
// }

// echo "Enter the string :";

// $str = trim(fgets(STDIN));
// echo "Reversed string : " . reverseString($str);

// # Q - Armstrong or not
// function isArmstrong($n){
//     $temp = $n;
//     $sum = 0;
//     $original_n = $n;
//     while($temp!= 0){
//         $digit = $temp % 10;
//         $sum += pow($digit, 3);
//         $temp = (int)($temp / 10);
//     }
//     if($original_n == $sum){
//         return true;
//     } else {
//         return false;
//     }
// }

// echo "Enter a number :";

// $num = trim(fgets(STDIN));

// if(isArmstrong($num)){
//     echo $num. " is an Armstrong number.";
// } else {
//     echo $num. " is not an Armstrong number.";
// }



# find the volume of cone
// function volCone($radius=25, $h1=60){
//     $vol = (1/3) * pi() * pow($radius,2) * $h1;
//     return $vol;
// }
// echo "Enter the radius of the Cone :";
// $radius = trim(fgets(STDIN));
// echo"Enter the height of the Cone :";
// $height = trim(fgets(STDIN));
// echo "Volume of the cone : ". volCone($radius, $height)."sqmm\n";
// echo "Volume of the cone : ". volCone()."sqmm";

// declare(strict_type=1);
// function addnum(float $a, float $b): float{
//     return $a+$b;
// }
// echo addnum(1.2, 5.8);



//recursive function to calculate the sum of all elements in a multidimenion aray
function arraySum($arr){
    $sum = 0;
    foreach($arr as $val){
        if(is_array($val)){
            $sum += arraySum($val);
        } else {
            $sum += $val;
        }
    }
    return $sum;
}

$array = [[1, 2, [3, 4]], 5, [6, 7, [8, 9]], 10];
echo "sum is " . arraySum($array);
?> 