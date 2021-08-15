<?php

$myArray = array("Rahul", "Sima", "Maya", "Ratan");

$myArray[] = "Kuttu";

print_r($myArray);
    
echo $myArray[2];

echo "<br></br>";

$secArray[0] = "pizza";

$secArray[1] = "mutton";

$secArray[6] = "coffee";

$secArray["Email"] = "rahulcivildp@gmail.com";

print_r($secArray);

unset($myArray[0]);

echo sizeof($myArray);

?>