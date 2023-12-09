<?php
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo chr(ord('A') + $j) . " ";
    }
    echo "\n";
}

for ($i = 4; $i > 0; $i--) {
    for ($j = 0; $j < $i; $j++) {
        echo chr(ord('A') + $j) . " ";
    }
    echo "\n";
}
?>
