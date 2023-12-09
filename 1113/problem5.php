<?php
function revsort(&$arr) {
    sort($arr);
    $arr = array_reverse($arr);
}

$arr = [4, 2, 8, 1, 6];
revsort($arr);
print_r($arr);
?>
