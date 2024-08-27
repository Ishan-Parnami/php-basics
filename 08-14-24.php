<?php
$company = [
    "departments" => [
        "HR" => [
            "manager" => "Ishan",
            "employees" => ["John", "Jane", "Tom"]
        ],
        "IT" => [
            "manager" => "Rahul",
            "employees" => ["David", "Suresh", "Rohan"]
        ]
    ],
    "location" => "Delhi",
    "Founded" => 1996
];

foreach($company["departments"] as $depart => $info){
    echo "Department: $depart<br>";
    echo "Manager: " . $info["manager"] . "<br>";
    echo "Employees: " . implode(", ", $info["employees"]) . "<br><br>";
}

echo "Company Location: " . $company["location"] . "<br>";
echo "Company Founded: " . $company["Founded"] . "<br><br>";

$library = ["Fiction"=>[
    "The great Gatsby" => [ "author" => "f. Scott fitzgerald", "year"=> 1925],
    "1984" => [ "author" => "George Orwell", "year" => 1949]
],
"Non-Fiction" => [
    "The Catcher in the Rye" => [ "author" => "J.D. Salinger", "year" => 1951],
    "To Kill a Mockingbird" => [ "author" => "Harper Lee", "year" => 1960]
],
    "Reference" => [
    "A Brief History of Time" => [ "author" => "Stephen Hawking", "year" => 1988],
    "The Universe in a Nutshell" => [ "author" => "Stephen Hawking", "year" => 2007]
]];

foreach($library as $genre => $books){
    echo "Genre: $genre<br>";
    foreach($books as $title => $info){
        echo "Title: $title<br>";
        echo "Author: " . $info["author"]. "<br>";
        echo "Year: ". $info["year"]. "<br><br>";
    }
}
// unset[][];
// $library["Fiction"][""]

?>
<?php 
function cal($price, $tax=""){
$total=$price+($price*$tax);
echo $total;
}
cal(42);
?>