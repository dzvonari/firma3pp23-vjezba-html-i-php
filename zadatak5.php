

<?php
$broj=(int)$_GET['broj'];
$ime=(int)$_GET['ime'];
$t=(int)$_GET['t'];

if($broj > $ime && $broj > $t){
    echo $broj;
}else if($ime > $broj && $ime>$t){
    echo $ime;
    }else if($t > $broj && $t>$ime){
        echo $t;
    }else{
        echo 'Jednaki su';
    }

?>
   