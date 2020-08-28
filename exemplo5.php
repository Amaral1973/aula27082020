<?php
    echo '<b>Laço WHILE - PHP</b>';
    echo '<hr/>';
    $contador = 0;
    while($contador <= 10){
        echo '<br/>'.$contador;
        $contador++;
    }
    echo '<hr/>';
    echo '<b>Laço FOREACH - PHP</b>';
    echo '<hr/>';
    $vetor = array(1,2,3,4,5,6,7,8,9,10,11,12);
    foreach($vetor as $item)
    {
        echo '<br/>'.$item;
    }
    echo '<hr/>';
?>