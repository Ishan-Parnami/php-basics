<?php
// $a = ["a"=>"red", "b"=>"green", "c"=>"blue", "d"=>"yellow", "e"=>"brown"];
// print_r(array_slice($a,1,3));

// echo "\n". array_search("red",$a)."\n";
// $a = ["red", "green", "blue", "yellow", "brown"];
// print_r(array_slice($a,1,3, true));

// # implode adn explode functions
// $b = ["red", "green", "blue", "yellow", "brown", "black"];
// $text = implode(" ", $b);

// echo "\n". $text."\n";
// $c = explode(" ", $text);
// print_r($c);


// # simple calculator
// $num1 = (int)readline("enter the first number :");
// $num2 = (int)readline("enter the second number :");
// echo"\n";
// echo "Sum : ".($num1 + $num2)."\n";
// echo "Difference : ".($num1 - $num2)."\n";
// echo "Product : ".($num1 * $num2)."\n";
// echo "Division : ".($num1 / $num2)."\n";
// echo "Exponent : ".($num1 ** $num2)."\n";
// echo "Modulus : ".($num1 % $num2)."\n";


// # avarage of array elements
// echo "Enter the elements of array using comma seprator: ";
// $input = explode(' ', readline());
// $arr = array_map('intval', $input);

// // $arr = [100, 210, 360, 470, 530];
// $sum = 0;
// foreach($arr as $value){
//     $sum += $value;
// }

// echo "\nAverage : ".($sum / count($arr))."\n";

// # number of even - array elements
// echo "Enter the elements of array using comma seprator: ";
// $input = explode(',', readline());
// $arr = array_map('intval', $input);

// $count = 0;

// foreach($arr as $value){
//     if($value % 2 == 0){
//         $count++;
//     }
// }

// echo "\nNumber of even elements : ".$count."\n";

// # number of odd - array elements

// $count = 0;

// foreach($arr as $value){
//     if($value % 2!= 0){
//         $count++;
//     }
// }

// echo "\nNumber of odd elements : ".$count."\n";
?>