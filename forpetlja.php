<?php

for($i=0;$i<10;$i+=1){
    echo 'Osijek <br>';
}

echo' <hr>';

for($i=0;$i<10;$i+=1){
    echo $i+1, '<br>';
}

echo' <hr>';

for($i=10;$i>0;$i--){
    echo "Osijek $i<br>";
}

echo' <hr>';
$suma=0;


for($i=1;$i<=100;$i++):
    $suma+=$i;
endfor;
    echo  $suma, '<br>';
    echo' <hr>';

    $z=3;
    $y=55;
    for($i=$z;$i<=$y;$i+=3){
        if($i%2===0){
            echo $i. '<br>';
        }
    }
    $redova=7;
    $kolona=5;
    echo '<table border="1">';
    for($i=1;$i<=$redova;$i++){
        echo '<tr>';
        for($j=1;$j<=$kolona;$j++){
            echo '<td>', $i*$j, '</td>';
        }

        echo'</tr>';
    }
    echo '</table>';

    $redovi=[];
        for($i=0;$i<$redova;$i++){
            $kolone=[];
            for($j=0;$j<$kolona;$j++){
                $kolone[]=0;
            }
                    $redovi[]=$kolone;
        }
echo '<pre>';
print_r ($redovi);
echo '</pre>';

echo '<table border="1">';
    for($i=0;$i<$redova;$i++){
        echo '<tr>';
        for($j=0;$j<$kolona;$j++){
            echo '<td>', $redovi[$i][$j], '</td>';
        }

        echo'</tr>';
    }
    echo '</table>';
$broj=1;
         for($j=$kolona-1;$j>=0;$j--){
             $redovi[$redova-1][$j]=$broj++;
         }

             echo '<table border="1">';
    for($i=0;$i<$redova;$i++){
        echo '<tr>';
        for($j=0;$j<$kolona;$j++){
            echo '<td>', $redovi[$i][$j], '</td>';
        }

        echo'</tr>';
    }
    echo '</table>';