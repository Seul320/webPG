<?php
// 5. 나이가 30세 이상인 고객 출력 프로그램
$file_path = 'client.txt';

$file = fopen($file_path, 'r');

if ($file) {
    while (($line = fgets($file)) !== false) {
        list($name, $age, $gender, $email) = explode("\t", trim($line));

        if ($age >= 30) {
            echo "Name: $name, Age: $age, Gender: $gender, Email: $email\n";
        }
    }

    fclose($file);
} else {
    echo "Could not open file $file_path";
}
?>
