<?php
#checks whether the number is numeric or not
if(is_numeric("guru")) echo "false";
else echo "false";

#prints the type of the variable
echo "\n".gettype(3424654);

#format the number to have comma as thousand separator
echo "\n".number_format(3424654, 0, ",", ".");

#format the number to have no thousand separator
echo "\n".number_format(3424654, 0);

#format the number to have 2 decimal places
echo "\n".number_format(3424654.323232, 2);

#format the number to have 0 decimal places
echo "\n".number_format(3424654.323232, 0);

#generate random number
echo "\n".rand(1, 100);

echo "\ntan(deg2rad(45)) = ",tan(deg2rad(45)),"\n";
echo "pow(4,3) = ",pow(4,3),"\n";
echo "sqrt(16) = ",sqrt(16),"\n";
echo "floor(3.16459) = ",floor(3.16459),"\n";
echo "ceil(3.16459) = ",ceil(3.16459),"\n";
echo dechex(16)."\n";
echo abs(-5)."\n";
echo sin(deg2rad(30))."\n";
echo tan(deg2rad(45))."\n";
echo log(2)."\n";
echo max(23,15,64,54)."\n";
echo min(32,54,76,23,12,30)."\n";
?>