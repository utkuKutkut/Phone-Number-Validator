<?php
$x = $_POST['code'];
$y = $_POST['userCode'];

// Compare $x and $y 
if ($x == $y) 
    echo 'TRUE! Your number is verified ...'; 
else
    echo 'FALSE! Couldn`t verified your number ...'; 
?>