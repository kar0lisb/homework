<?php

$metai = 1774;

$cities3 = [
    'Tokijas' => [13.6, 1868, 'Japonija'],
    'Vasingtonas' => [0.6, 1790, 'JAV'],
    'Maskva' => [11.5, 1147, 'Rusija']
    ];
if($metai >= $cities3['Vasingtonas'][1]) {
    echo 'Vašingtonas yra JAV sostinė';
} elseif($metai == 1774) {
    echo 'JAV sostinė yra Filadelfijoje';
}else {
    $year = $cities3['Vasingtonas'][1] - $metai;
    echo "Liko $year metai (-ų) iki Vašingotono įkurimo";
}
?>