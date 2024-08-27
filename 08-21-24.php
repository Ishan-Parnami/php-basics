<?php
// include 'Globlevars.php';
// echo "$color colored $car car.\n";

// $name = array("Manoj", "Rahul", "Aneesh");
// $marks = array("75","87","77");
// $c = array_combine($name, $marks);
// print_r($c);

// $name = array("Manoj", "Rahul", "Aneesh");
// $marks = array("75","87","77");
// $c = array_combine($name, $marks);
// print_r($c);

// $courses=array("PHP","Laravel","Node","React","HTML");
// print_r(array_chunk($courses,2));

// $a = ["Block33", "Block34", "Block37", "Block33", "Block33"];
// print_r(array_count_values($a));



// $arr1 = ["a"=>"red", "b"=>"blue", "C" => "green", "d"=>"orange"];
// $arr2 = ["e"=>"red", "f"=>"blue", "g" => "green"];
// $arr3 = ["h"=>"orange", "i"=> "magenta"];
// $resDIF=array_diff($arr1, $arr3);
// $resFlip=array_flip($arr2);
// $resINTERSECT = array_intersect($arr1, $arr2, $arr3);
// print_r($resDIF);
// echo"_________________________________________________________________________________________________________\n\n";
// print_r($resFlip);
// echo"_________________________________________________________________________________________________________\n\n";
// print_r($resINTERSECT);
// echo"_________________________________________________________________________________________________________\n\n";



# Q - array_search
// $color = ["orange", "blue", "red", "green", "black","red", "red", "violet"];

// $count = 0;
// foreach ($color as $key => $value) {
//     if ($value === "red") {
//         $count++;
//         if ($count === 3) {
//             $color[$key] = "white";
//             break;
//         }
//     }
// }

// print_r($color);

// $result = ['name'=>"Ishita", 'cgpa'=>'7.6', 'status'=>'mingle'];
// $result = ['name'=>"Ishan", 'cgpa'=>'9.3', 'status'=>'mingle'];
// $result = ['name'=>"Krishn", 'cgpa'=>'8.3', 'status'=>'single'];

function filterAndTranfom($arr, $thr){
    $filteredArr = array_filter($arr, function($value) use ($thr) {
        return $value > $thr;
    });
    $transformedArr = array_map(function($value) {
        return ($value*$value);
    }, $filteredArr);
    return $transformedArr;
}
$num=[1,9,4,3,5,32,4,2,4,5,3];
$thr= 3;
$res = filterAndTranfom($num, $thr);
print_r($res);
?>

