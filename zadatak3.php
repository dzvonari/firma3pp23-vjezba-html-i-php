<?php

$broj1 = intval($_GET['b1']);
$broj2 = intval($_GET['b2']);
if($broj1>$broj2)
{
    echo $broj1, '<br>';
}
else if($broj1<$broj2)
{
    echo $broj2, '<br>';
}else{ echo 'JEDNAKI';}
