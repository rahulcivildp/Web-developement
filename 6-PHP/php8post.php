<form method="post">
    
    <p>Check your name from the existing list</p>
    
    <input name="text" type="text" placeholder="00" id="text">
    
    <input type="submit" value="Submit">
    
</form>


<?php

if ($_POST) {

$family = array("Rahul", "Sima", "Maya", "Ratan", "Chotu");

$j = 0;

$isOk = true;

while ($j <= sizeof($family)) {
    
    if ($_POST['text'] == $family[$j]) {
    
        echo "<p>Hello! I know you.</p><br>";
    
        $isOk = false;
        
    }
    
    $j++;
    
}

if ($isOk) {

echo "<p>I dunno you</p><br>";

}
    
}

?>

