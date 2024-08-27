<?php
    $i = date('N');
    switch($i){
        case 1:
            echo "Weekday - Monday";
            break;
        case 2:
            echo "Weekday - Tuesday";
            break;
        case 3:
            echo "Weekday - Wednesday";
            break;
        case 4:
            echo "Weekday - Thursday";
            break;
        case 5:
            echo "Weekday - Friday";
            break;
        case 6:
            echo "Weekend - Saturday";
            break;
        case 7:
            echo "Weekend - Sunday";
            break;
        default:
            echo "Invalid day number";
    }
    echo "<br>";

    $num = 4;
    for($y = 0; $y < $num; $y++){
        if($y%2==0){
            for($a = 0; $a < $num; $a++){
                echo "* ";
            }
            echo "<br>";
        } else{
            for($a = 0; $a < $num-1; $a++){
                echo " * ";
            }
            echo "<br>";
        }
    }    

    echo "<br>";
    for($y = $num; $y >= 0; $y--){
        for($a = 0; $a < $y; $a++){
            echo "* ";
        }
        echo "<br>";
    }

    ?>