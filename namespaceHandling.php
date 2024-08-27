<?php
namespace myspace;
class myclass {
    public function __construct(){
        echo "Name of the class " . __CLASS__ ." in ". __NAMESPACE__."";
    }
}
class myclass {  //error
    public function printname(){
        echo "Ishan Parnami<br>";
    }
}

$class_name= __NAMESPACE__."\myclass";
$a=new $class_name;

?>