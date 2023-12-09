<?php
function printNextEvenOrItself($a) {
    if ($a % 2 == 1) {
        echo $a + 1;
    } else {
        echo $a;
    }
}

$a = 7;
printNextEvenOrItself($a);
?>