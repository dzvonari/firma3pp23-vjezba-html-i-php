<?php



$naslov = (int)$_GET['naslov'];

$tekst = $_GET['tekst'];

if ($naslov>0 && $naslov<7){
echo "<h$naslov>$tekst</h$naslov>";

}else {
    echo 'neispravan parametar';
}



?>