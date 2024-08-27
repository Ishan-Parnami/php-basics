<?php
    $person = array(
        "name" => "John",
        "age" => 25,
        "city" => "New York"
    );
    
    echo "Name: " . $person["name"] . "<br>";
    echo "Age: " . $person["age"] . "<br>";
    echo "City: " . $person["city"] . "<br><br>";
    
    $person["name"] = "Jane";
    $person["age"] = 30;
    $person["city"] = "Los Angeles";
    $person["occupation"] = "software devloper";
    $person["email"] = "jane@gmail.com";

    echo "Name: " . $person["name"] . "<br>";
    echo "Age: " . $person["age"] . "<br>";
    echo "City: " . $person["city"] . "<br>";
    echo "Occupation: " . $person["occupation"] . "<br>";
    echo "Email: " . $person["email"] . "<br>";

    unset($person["email"]);

    $keys=array_keys($person);
    $values=array_values($person);
    echo "keys in the associative array:\n";
    print_r($keys);
    echo "values in the associative array:\n";
    print_r($values);

?>