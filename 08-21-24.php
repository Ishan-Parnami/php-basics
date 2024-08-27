<?php
# indexed array
// $arr1 = array(10, "asd", 1.55, true);
$arr1 = [10, "asd", 1.55, true];
# associative array
// $arr2 = array("one"=>1, "two"=>2, "three"=>3);
$arr2 = ["one"=>1, "two"=>2, "three"=>3];

# multi-dimensional array
 // $arr3 = array(array(10,20,30), array("Ten", "Thirty"), array(70, 89));
 // $arr3 = array([[10,20,30], ["Ten", "Thirty"], [70, 89]]);
 // $arr3 = array([10,20,30], ["Ten", "Thirty"], ["Physics"=>70, "Chemistry"=>89]);
 $arr3 = [[10,20,30], ["Ten", "Thirty"], ["Physics"=>70, "Chemistry"=>89]];

print_r($arr1); echo"\n";
 var_dump($arr2); echo"\n";
 print_r($arr3); echo"\n";
 echo $arr3[0][0]."\n";
 echo $arr3[1][0]."\n";
 echo $arr3[2]["Physics"]."\n";
 echo $arr3[2]["Chemistry"]."\n";
 echo $arr3[1][1]."\n";
 
 // modify an element in multi-dimensional array
 $arr3[1][0] = "Twenty";
 print_r($arr3); echo"\n";
 
 // adding an element in multi-dimensional array
 $arr3[] = array("Fourty", "Forty");
 print_r($arr3); echo"\n";
 
 // deleting an element in multi-dimensional array
 unset($arr3[1][0]);
 print_r($arr3); echo"\n";
 
 // adding an associative element in multi-dimensional array
 $arr3["Fourth"] = "Forty-five";
 print_r($arr3); echo"\n";
 
 // deleting an associative element in multi-dimensional array
 unset($arr3["Fourth"]);
 print_r($arr3); echo"\n";
 
 // adding an element at a specific position in multi-dimensional array
 array_splice($arr3[1], 1, 0, array("Fifty", "Sixty"));
 print_r($arr3); echo"\n";
 echo"\n\n_________________________________________________________________________________________________________\n\n";
 $courses = ["INT220"=>"PHP", "INT221"=>"Laravel", "INT222"=>"NodeJS"];
 //  echo $courses["INT220"]."\n";
 foreach($courses as $course => $value){
     echo "Course ID: $course, Course Name: $value\n";
     echo "\n";
}
    echo"_________________________________________________________________________________________________________\n\n";
    $nums = [1,3,3,5,7,2,4];
    echo "Original Array: ".implode(", ", $nums)."\n";
    $size = count($nums);
    echo($size)."\n";
    sort($nums);
    echo "Sorted Array: ".implode(", ", $nums)."\n";
    echo"_________________________________________________________________________________________________________\n\n";
    print_r(array_chunk($nums, 2));
?>