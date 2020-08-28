<?php
    echo '<h4>Quanto é 17% de 127?</h4>';
    echo (17 /100) * 127;
    echo '<hr/>';
    //Função em PHP
    function porcentagem_xn ($porcentagem, $total){
        return ($porcentagem / 100) * $total;
    }
    echo 'Quanto é 11% de 22: <b>'.porcentagem_xn(11,22).'</b><br/>';
    echo 'Quanto é 22% de 11: <b>'.porcentagem_xn(22,11).'</b><br/>';
    echo '<hr/>';
    echo '<h4>Usando função faça o inverso</h4>';
    echo '<h4>Exemplo: 2,42 é X% de 22</h4>';
    function parcial ($parcial, $total){
        return ( $parcial * 100 ) / $total;
    }
    echo "2.42 é <b>" . parcial(2.42, 22) . "%</b> de 22.<br>";
    echo "103.95 é <b>" . parcial(103.95, 105) . "%</b> de 105.<br>";
    echo '<hr/>';
    echo '<h4>Usando datas no PHP</h4>';
    $hoje = date('d/m/Y');
    echo $hoje;
    echo '<hr/>';
    echo '<h4>Mostrar data e hora atual</h4>';
    $agora = date('d/m/Y h:i');
    echo $agora;
    echo '<hr/>';
    echo '<h4>Utilizar o timezone</h4>';
    $timezone = new DateTimeZone('America/Sao_Paulo');
    $agora2 = new DateTime('now',$timezone);
    $novadata = $agora2->format('d/m/Y');
    echo $novadata;
    echo '<hr/>';
    echo '<h4>Diferença entre duas datas</h4>';
    $data1 = "20/02/-2013";
    $data2 = "20/02/2014";
    $data1 = implode('-',array_reverse(explode('/',$data1)));
    $data2 = implode('-',array_reverse(explode('/',$data2)));
    $d1 = strtotime($data1);
    $d2 = strtotime($data2);
    $datafinal = ($d2 - $d1) / 86400;
    if($datafinal < 0)
        $datafinal *= -1;
    echo 'A diferença entre as duas data, é:<b>'.$datafinal.'</b> .';
    echo '<hr/>';
?>