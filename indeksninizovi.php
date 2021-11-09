<?php

$niz = [2,3,4,1,1];

echo gettype($niz);

echo '<pre>';
print_r ($niz);
echo '</pre>';

//dodavanje novog elementa u niz

$niz[]=7;

echo '<pre>';
print_r ($niz);
echo '</pre>';

$niznizova = [
    [0,0,0],
    [0,0,0],
    [0,0,0],
];

echo '<pre>';
print_r ($niznizova);
echo '</pre>';

$niznizova [1][1]=1;
echo '<pre>';
print_r ($niznizova);
echo '</pre>';

echo '<hr>';
$niz=['Osijek','Zagreb','DM'];
echo '<pre>';
print_r ($niz);
echo '</pre>';

foreach($niz as $grad){
    echo $grad, '<br>';
}