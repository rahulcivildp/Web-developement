<?php

    if ($_GET['number']) {
        
        $i = 2;
        
        $isPrime = true;
        
        while ($i < $_GET['number']) {
            
            if ($_GET['number'] % $i == 0) {
                
                // number in not prime!
                
                $isPrime = false;
                
            }
            
            $i++;
            
        }
        if ($isPrime) {
            
            echo "That's a prime number - ".$i.".";
            
        }else {
            
            echo "This is NOT a prime number - ".$i.".";
            
        } 
        
    }
?>

<p>What's your name?</p>

<form>
<input name="number" type="number" placeholder="00">
    <input type="submit" value="Submit">
</form>