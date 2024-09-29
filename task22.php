<?php
$num=12321; 
$reverse = strrev((string)$num);

if ($num == $reverse) {
    echo "$num is a palindrome";
} else {
    echo "$num is not a palindrome";
}

?>