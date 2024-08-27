<?php
/*    $file=array("file1","file2");
    echo(var_dump($file)); # give datatype + value
    echo(gettype($file)); # datatype
*/  ?> 

<?php 
$fruits = array("apple", "banana", "cherry");
$fruits[] = "date";
array_push($fruits, "elderberry");

//1. for deleting any element from array
//unset($fruits[1]);

//$index = array_search("banana", $fruits);
// if ($index !== false) {
    array_splice($fruits, 1, 1); //$index at centre
// }

echo "Fruits array: \n";
foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}

if(in_array("cherry", $fruits)){
    echo "Cherry is present in the array.";
} else {
    echo "element not found\n";
}

$length = count($fruits);
echo "the number of fruits in the array are $length.\n";

//sorting 
sort($fruits);
echo "Sorted fruits  in the array:\n";
foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}

//merging
$vege = array("corrot", "broccoli");
$food = array_merge($fruits, $vege);
echo "Merged array:\n";

foreach ($food as $fruit) {
    echo $fruit. "\n";
}
?>
