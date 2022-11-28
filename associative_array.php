<?php

echo "welcome to associative array in php <br>";
$arr = array("name" => "nihu",
            "age" => 23,
            "color" => "blue",
            04 => "yes");

// echo $arr["name"];
// echo "<br>";
// echo $arr["age"];
// echo "<br>";
// echo $arr["color"];
// echo "<br>";
// echo $arr[04];
// echo "<br>";
foreach ($arr as $key => $value) {
    echo "my $key is $value ";
};
?>
