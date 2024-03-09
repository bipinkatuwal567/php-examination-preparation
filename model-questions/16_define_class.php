<?php
class MyClass{
    public $property1;
    public $property2;

    public function __construct($value1, $value2){
        $this->property1 = $value1;
        $this->property2 = $value2;
    }

    public function myMethod(){
        echo "this is just a method";
    }

    public function getProperty1(){
        echo "this is $this->property1";
    }

    public function getProperty2(){
        echo "this is $this->property2";
    }
}

$myObject = new MyClass("value1", "value2");

echo $myObject->property1;
echo "<br>";
$myObject->getProperty1();
echo "<br>";
$myObject->myMethod();
?>