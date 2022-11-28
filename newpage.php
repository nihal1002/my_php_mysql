<?php
$name ="nihu";
$age = 23;
$weight = 75.56;
$friends = array("rohan", "mohan", "chohan", "bulla");


echo "my name is $name and my age $age and my weight is $weight kgs";
echo "<br>";
//to see array
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";
echo "<br>";


$bio = "I am a bad boy";
echo "length of " . "my string is " . strlen($bio);
echo "<br>";
echo "<br>";
echo str_word_count($bio);
echo "<br>";
echo "<br>";
echo strrev($bio);
echo "<br>";
echo strpos($bio, "boy");
echo "<br>";
echo str_replace("bad", "good", $bio);
echo "<br>";
echo str_repeat($bio, 5);
?>
