<?php

$s=0;

foreach($_GET as $k){
    $s=$s+ (int) $k; 
}

echo '<pre>';
print_r ($s);
echo '</pre>';
?>
   