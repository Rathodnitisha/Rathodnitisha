<?php
$num = 5; // input number
$factorial = 1;

for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}

echo "Factorial of $num is $factorial";

?>