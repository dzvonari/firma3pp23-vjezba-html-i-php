<?php
$broj= isset($_GET['broj']) ? (int)($_GET['broj']) : 0;

switch($broj){
    case 1:
        echo 'nedovoljan';
        break;

   case 2:
        echo 'dovoljan';
        break;
        
    case 3:
    case 4:
    case 5:

        echo 'super';
        break;
        
        default:
        echo 'OSTALO';
}