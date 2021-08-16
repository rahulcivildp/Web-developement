<?php

$emailTo = "rahulcivildp@gmail.com";

$subject = "This is a subject line";

$body = "This body contains some messages";

$header = "From: soumitrag636@gmail.com";
    
if (mail($emailTo, $subject, $body, $header)) {
    
    echo "Email is sent!";
    
}else {
    
    echo "Error accured!";
    
}

?>
