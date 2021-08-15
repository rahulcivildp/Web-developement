<?php

$family = array("Rahul", "Sima", "Maya", "Ratan", "Chotu");

foreach ($family as $key => $value) {
    
    $family[$key] = $value."Sarkar";
    
    echo "Array item".$key."is ".$value."<br>";
    
}

for($i = 0; $i <= sizeof($family); $i++) {
    
    echo $family[$i]."<br>";
    
}
?>