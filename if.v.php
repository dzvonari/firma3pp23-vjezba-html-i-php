<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<?php include_once 'head.php';
   ?>



<body>
    
<div class="grid-containter">
    <?php
    require_once 'izbornik.php';
?>

<div class="grid-x grid-padding-x">
    <div class="large-8 cell">
    <h1>IF Vjezb44a</h1>
    <pre>
    </pre>
    
    </div>
<div class="large-4 cell">
<?php

$x = $_GET['broj'];

echo gettype($x), '<br>';

$uvijet = $x=='2';

echo gettype($uvijet), ' &gt;' .$uvijet, '&lt;<br>';

$uvijet= $x===2;

echo gettype($uvijet), ' &gt;' .$uvijet, '&lt;<br>';

if($uvijet){
    echo 'true';
}

if($x==='2'){
    echo 'parametar 2', '<br>';
}

$t=6;
if($t>0 & $t<5){
    echo '1', '<br>';
}

if($t===6 || $t>10){
    echo '2', '<br>';
}

if($t!==5){
    echo '3', '<br>';
}
if($t!==5){
    echo '4', '<br>';
}else{
    echo '5', '<br>';
}


if($t===2){
    echo '6', '<br>';
}else if($t===8){
    echo '7', '<br>';
}else{
    echo '8', '<br>';
}

if($t>4){
    if($t<8){
        echo '9', '<br>';
    }
}

$k=1;if($k===1){
    echo 'Super', '<br>';
}else{
    echo 'Loše', '<br>';
}

echo $k===1 ? 'Super' : 'Loše','<br>';


if (isset($_GET['broj'])){
    $broj = (int)$_GET['broj'];
}else{
    echo 'broj nije postavljen';
    $broj=0;
}

echo $broj, '<br>';

$broj = isset($_GET['broj']) ? (int)$_GET['broj'] : 0;

echo $broj, 'TO', '<br>';






?>
</div>

</div>
</div>


</body>
</html>

<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>