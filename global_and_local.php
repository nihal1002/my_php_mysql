<?php
echo "welcome to scope local and global variable in php <br>";
$a = 98;
$b = 9;

function printValue(){
    $a = 87; //local variable
    global $a, $b; //gives the access to these global variables
    $a = 100;
    $b = 1000;

    echo "The value of your variables a is $a and variable b is and $b <br>";

}

echo $a;
echo "<br>";
printValue();
echo "the value of your variable a is $a and variable b is $b <br>";

echo var_dump($GLOBALS);//prints all the global array variables
echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);
?>
