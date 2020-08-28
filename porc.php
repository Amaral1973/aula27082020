<?php
echo '<h4>Quanto é 17% de 127?</h4>';
echo ( 17 / 100 ) * 127;
echo '<hr>';
#Função de Porcentagem
function porcentagem_xn ( $porcentagem, $total ) {
	return ( $porcentagem / 100 ) * $total;
}
echo "Quanto é 11% de 22: <b>" . porcentagem_xn(11, 22) . "</b><br>";
echo "Quanto é 22% de 11: <b>" . porcentagem_xn(22, 11) . "</b><br>";
echo "Quanto é 99% de 100: <b>" . porcentagem_xn(99, 100) . "</b><br>";
echo "Quanto é 99% de 105: <b>" . porcentagem_xn(99, 105) . "</b><br>";
echo "Quanto é 201% de 105: <b>" . porcentagem_xn(201, 105) . "</b><br>";
echo '<hr/>';
echo '<h4>Agora vamos fazer o inverso</h4>';
echo '<h4>2,42 é X% de 22</h4>';
#Funcão para realizar o cálculo
function porcentagem_nx ( $parcial, $total ) {
    return ( $parcial * 100 ) / $total;
}
echo "2.42 é <b>" . porcentagem_nx(2.42, 22) . "%</b> de 22.<br>";
echo "2.42 é <b>" . porcentagem_nx(2.42, 11) . "%</b> de 11.<br>";
echo "99 é <b>" . porcentagem_nx(99, 100) . "%</b> de 100.<br>";
echo "103.95 é <b>" . porcentagem_nx(103.95, 105) . "%</b> de 105.<br>";
echo "211.05 é <b>" . porcentagem_nx(211.05, 105) . "%</b> de 105.<br>";
echo '<hr/>';
#Função de porcentagem: N é N% de X
function porcentagem_nnx ( $parcial, $porcentagem ) {
    return ( $parcial / $porcentagem ) * 100;
}
echo "2.42 é 11% de <b>" . porcentagem_nnx ( 2.42, 11 ) . "</b></b>.<br>";
echo "2.42 é  22% de <b>" . porcentagem_nnx ( 2.42, 22 ) . "</b></b>.<br>";
echo "99 é 100% de <b>" . porcentagem_nnx ( 99, 100 ) . "</b></b>.<br>";
echo "103.95 é  99% de <b>" . porcentagem_nnx ( 103.95, 99 ) . "</b></b>.<br>";
echo "2.42 é 11% de <b>" . porcentagem_nnx ( 211.05, 201 ) . "</b></b>.<br>";
echo "337799 é 70% de <b>" . porcentagem_nnx ( 337799, 70 ) . "</b></b>.<br>";
?>