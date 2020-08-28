<?php
    echo '<h4>Quanto é 17% DE 127?</h4>';
    echo (17/100)*127;
    echo '<hr/>';
    //Função da porcentagem
    function porcentagem ($porcentagem, $total){
        return ($porcentagem / 100) * $total;
    }
    echo 'Quanto é 11% de 22: <b>'.porcentagem(11,22).'</b><br/>';
    echo 'Quanto é 22% de 11: <b>'.porcentagem(22,11).'</b><br/>';
    echo '<hr/>';
    echo '<h4>Usando função</h4>';
    echo '<h4>Faça, 2,42 é X% de 22</h4>';
    function porcentagemi($parcial,$total){
        return ($parcial * 100) / $total;
    }
    echo "2.42 é <b>" . porcentagemi(2.42, 22) . "%</b> de 22.<br>";
    echo "211.05 é <b>" . porcentagemi(211.05, 105) . "%</b> de 105.<br>";
    echo '<hr/>';
    echo '<h4>Mostrando a data atual...</h4>';
    $hoje = date('d/m/Y');
    echo $hoje;
    echo '<hr/>';
    echo '<h4>Mostrando a data e hora atual...</h4>';
    $hoje2 = date('d/m/Y H:i');
    echo $hoje2;
    echo '<hr/>';
    echo '<h4>Mostrando a data e hora atual, timezone...</h4>';
    $timezone = new DateTimeZone('America/Sao_Paulo');
    $agora = new DateTime('now', $timezone);
    $novadata = $agora->format('d/m/Y H:i');
    echo $novadata;
    echo '<hr/>';
    echo '<h4>Diferença entre duas datas</h4>';
    $data1 = "28/03/2013";
    $data2 = "28/03/2014";
    $data1 = implode('-',array_reverse(explode('/',$data1)));
    $data2 = implode('-',array_reverse(explode('/',$data2)));
    $d1 = strtotime($data1);
    $d2 = strtotime($data2);
    $datafinal = ($d2 - $d1)/86400;
    if($datafinal <0)
        $datafinal *= -1;
    echo "A diferença entre as duas datas em dias é, $datafinal";
    echo '<hr/>';
?>