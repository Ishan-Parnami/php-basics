<?php
namespace myspace;
echo "The line Number is: ",__line__;
echo "<br>";
echo "The file name is: ",__file__;
echo "<br>";

function hello(){
    echo "The function name is: ",__function__;
    echo "<br>";
}
hello();
echo "The method name is: ",__method__;
echo "<br>";
echo "The php version is: ",PHP_VERSION;
echo "<br>";
echo "The diractory name is: ",__dir__;
echo "<br>";
?>

<?php
trait mhyTrait{
    public function myTraitFunction(){
        echo "This is a function from the mhyTrait<br>";
    }
}

class myClass{
    public function __construct(){
        echo "Name of the class: ".__CLASS__." in ".__NAMESPACE__.".";
    }
    use mhyTrait;
    public function myClassFunction(){
        echo "This is a function from the myClass";
    }
}

$myObject = new myClass();
$myObject->myTraitFunction();
$myObject->myClassFunction();
$class_name = __NAMESPACE__ . '\myclass';
$a = new $class_name;
?>