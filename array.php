<?php
echo '<h1>1º Forma de declarar um array</h1><br/>';
$arr=["primeiro valor", "segundo valor", "terceiro valor"];
print_r($arr);
echo '<hr/>';
echo '<h1>2º Forma de declarar um array</h1><br/>';
$arr=array("primeiro valor", "segundo valor", "terceiro valor");
print_r($arr);
echo '<hr/>';
echo '<h1>Lendo elementos do array</h1><br/>';
$arr=array("primeiro valor", "segundo valor", "terceiro valor");
echo $arr[1];
echo '<hr/>';
echo '<h1>Criando Chaves Personalizadas no Array</h1><br/>';
$arr=array( "nome"=>"Rafael","sobrenome"=>"Marques", "idade"=>"25");
print_r($arr);
echo "<br/><br/>";
echo "Nome: <b>".$arr["nome"]."</b><br/>";
echo "Sobrenome: <b>".$arr["sobrenome"]."</b><br/>";
echo "Idade: <b>".$arr["idade"]."</b>";
echo '<hr/>';
echo '<h1>Array Multidimensional</h1><br/>';
echo 'As PHP arrays são estruturas heterogêneas que permitem que você salve múltiplos dados de tipos diferentes em um mesmo lugar. Dessa forma, é permitido incluir uma ou mais arrays, dentro de uma mesma PHP array. Portanto, obtemos assim a forma de estrutura de uma matriz.<br/>';
$arr=array(
    array("Primeiro valor","Segundo valor"),
    array("Terceiro valor","Quarto valor")
    );
    print_r($arr);
    echo "<br/>";
    print_r($arr[0]);
    echo "<br/>";
    print_r($arr[1]);
echo '<hr/>';
echo '<h1>Array Multidimensional, acessando valores específicos</h1><br/>';
$arr=array(
    array("Primeiro valor","Segundo valor"),
    array("Terceiro valor","Quarto valor")
    ); 
    print_r($arr[0][0]);
    echo "<br/>";
    print_r($arr[0][1]);
    echo "<br/>";
    print_r($arr[1][0]);
    echo "<br/>";
    print_r($arr[1][1]);
echo '<hr/>';
echo '<h1>Contando elementos de um array</h1><br/>';
$numeros = [1,2,700,13,6,78,100,212,15,2,3,1000,412,6];
echo count($numeros);
echo '<hr/>';
echo '<h1>Adicionando um valor no array dinamicamente</h1><br/>';
$arr = array();
$arr[] = 'azul';
$arr[] = 'amarelo';
$arr[] = 'vermelho';
$arr[] = 'rosa';
print_r($arr);
echo '<hr/>';
echo '<h1>Adicionando um valor no array dinamicamente 2</h1><br/>';
$arr=array("primeiro valor", "segundo valor", "terceiro valor"); 
	echo "valor incial da minha array é:<br>";
 	print_r($arr);
	echo "<br/><br/>";
	$arr[] = 'quarto valor';
	$arr[] = 'quinto valor';
	echo "Agora a nossa array é:<br/>";
  	print_r($arr);
	echo "<br/>";
echo '<hr/>';
?>