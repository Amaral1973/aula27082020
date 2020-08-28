<?php
echo '<h4>Mostrando a data de hoje...</h4>';
$hoje = date('d/m/Y');
echo $hoje;
echo '<hr/>';
echo '<h4>Mostrando a data e hora atual...</h4>';
$agora = date('d/m/Y H:i');
echo $agora;
echo '<hr/>';
echo '<h4>Mostrando a data por zona e criando o formato</h4>';
$timezone = new DateTimeZone('America/Sao_Paulo');
$agora2 = new DateTime('now', $timezone);
$novadata = $agora2->format('d/m/Y');
echo $novadata;
echo '<hr/>';
echo '<h4>Diferença entre duas datas</h4>';
$data1 = "28/02/2013";
$data2 = "22/04/2013";

// transforma a data do formato BR para o formato americano, ANO-MES-DIA
$data1 = implode('-', array_reverse(explode('/', $data1)));
$data2 = implode('-', array_reverse(explode('/', $data2)));

// converte as datas para o formato timestamp
$d1 = strtotime($data1); 
$d2 = strtotime($data2);

// verifica a diferença em segundos entre as duas datas e divide pelo número de segundos que um dia possui
$dataFinal = ($d2 - $d1) /86400;

// caso a data 2 seja menor que a data 1, multiplica o resultado por -1
if($dataFinal < 0)
  $dataFinal *= -1;

echo "Entre as duas datas informadas, existem $dataFinal dias.";
?>