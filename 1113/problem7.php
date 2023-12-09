<?php
// 4. PHP 프로그램
$data = [
    'Kim' => 'Seoul',
    'Lee' => ['Pusan', 'Daegu'],
    'Choi' => 'Inchon',
    'Park' => ['Suwon', 'Daejon'],
    'Jung' => ['Kwangju', 'Chunchon', 'Wonju']
];

// Choi 항목 삭제
unset($data['Choi']);

// 출력
foreach ($data as $name => $cities) {
    echo "$name: ";
    if (is_array($cities)) {
        echo implode(', ', $cities);
    } else {
        echo $cities;
    }
    echo "\n";
}
?>
