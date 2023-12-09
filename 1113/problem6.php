<?php
// 3. 파일 정보 계산 프로그램
$file_path = 'exam.txt';

$lines = file($file_path);
$num_lines = count($lines);

$num_words = 0;
$num_chars = 0;
foreach ($lines as $line) {
    $num_words += str_word_count($line);
    $num_chars += strlen($line);
}

echo "Number of lines: $num_lines\n";
echo "Number of words: $num_words\n";
echo "Number of characters: $num_chars\n";
?>
