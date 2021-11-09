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

$niz = ['pero','kljuc'=>2];


echo '<pre>';
print_r($niz);
echo '</pre>';

$podaci = [ 
    ['sifra' => 1,
    'naziv' => 'PHP'    
    ],
    ['sifra' => 2,
    'naziv' => 'JAVA'    
    ],

];

echo '<pre>';
print_r($podaci);
echo '</pre>';

echo $podaci [0]['naziv'],'<br>',
    $podaci [1]['naziv'],'<br>';

    

    foreach($podaci as $r){
        foreach($r as $v){
            echo $v, '<br>';
        }

        echo $r['sifra'], '   ',$r['naziv'], '<br>';
    }