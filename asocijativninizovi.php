<?php

echo '<pre>';
print_r($_GET);
echo '</pre>';



$niz = [
    'kljuc' => 'vrijednost',
    false => 5.5,
    true => 2,
    'mjesto' => 'Osijek'
];

echo '<pre>';
print_r($niz);
echo '</pre>';

echo $niz['mjesto'];

$niz = [
    'mjesto'=> [
        'sifra' =>1,
        'naziv'=>'Osijek'
    ],
    'ime' => 'Pero'
];


echo '<pre>';
print_r($niz);
echo '</pre>';


echo $niz ['ime'], '  dolazi iz grada  ',
$niz['mjesto']['naziv'], '<br>';


foreach($niz as $k => $v){
    if(gettype($v)==='array'){
        continue;
    }
    echo $k, ' je ', $v;
}