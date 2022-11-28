<?php
echo "welcome to foreach loop <br>";
$arr = array("banana", "mango", "bread", "milk");

// for ($i=0; $i <count($arr) ; $i++) {
//     echo "$arr[$i] <br>";
// }
foreach ($arr as $value) {
    echo "$value <br>";
}

?>
