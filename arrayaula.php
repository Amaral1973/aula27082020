<?php
    echo '<h3>1º Forma de declarar um array</h3>';
    $arr=["primeiro valor","segundo valor","terceiro valor"];
    print_r($arr);
    echo '<hr/>';

    echo '<h3>2º Forma de declarar um array</h3>';
    $arr=array("primeiro valor","segundo valor","terceiro valor");
    print_r($arr);
    echo '<hr/>';

    echo '<h3>Lendo elementos do array</h3>';
    $arr=array("primeiro valor","segundo valor","terceiro valor");
    echo $arr[0];
    echo '<hr/>';

    echo '<h3>Criando chaves personalizadas no array</h3>';
    $arr=array("nome"=>"Guto","sobrenome"=>"Marques","idade"=>"25");
    print_r($arr);
    echo '<br/>';
    echo "Nome: <b>".$arr["nome"]."</b><br/>";
    echo "Sobrenome: <b>".$arr["sobrenome"]."</b><br/>";
    echo "Idade: <b>".$arr["idade"]."</b>";
    echo '<hr/>';

    echo '<h3>Array Multidimensional</h3>';
    echo 'As PHP arrays são estruturas heterogêneas que permitem que você salve múltiplos dados de tipos diferentes em um mesmo lugar. Dessa forma, é permitido incluir uma ou mais arrays, dentro de uma mesma PHP array. Portanto, obtemos assim a forma de estrutura de uma matriz.<br/>';
    $arr = array(array("Primeiro valor","Segundo Valor"),array("Terceiro valor","Quarto valor"));
    print_r($arr);
    echo '<br/>';
    print_r($arr[0]);
    echo '<br/>';
    print_r($arr[1]);
    echo '<hr/>';

    echo '<h3>Array Multidimensional, acessando valores dentro dele</h3>';
    $arr = array(
        array("Primeiro valor","Segundo Valor"),
        array("Terceiro valor","Quarto valor","Quinto valor")
    );
    print_r($arr);
    echo '<br/>';
    print_r($arr[0][1]);
    echo '<br/>';
    print_r($arr[1][0]);
    echo '<br/>'.count($arr[1]);
    echo '<hr/>';

    echo '<h3>Contando os elementos de um array</h3>';
    $numeros = [1,2,3,56,123,1000,1234,234,67,89,100,12,678,432,900,11];
    echo count($numeros);
    echo '<hr/>';

    echo '<h3>Adicionando valores dentro do array</h3>';
    $arr = array();
    $arr[] = 'azul';
    $arr[] = 'amarelo';
    $arr[] = 'vermelho';
    $arr[] = 'rosa';
    print_r($arr);
    echo '<hr/>';

    echo '<h3>Adicionando valores em chaves personalizadas</h3>';
    $arr=array("nome"=>"","sobrenome"=>"","idade"=>"");
    $arr["nome"] = "Rodrigo";
    $arr["sobrenome"] = "Pombal";
    $arr["idade"] = "17";
    print_r($arr);
    echo '<br/>';
    echo "Nome: <b>".$arr["nome"]."</b><br/>";
    echo "Sobrenome: <b>".$arr["sobrenome"]."</b><br/>";
    echo "Idade: <b>".$arr["idade"]."</b>";
    echo '<hr/>';

    echo '<h3>Adicionando valores dentro do array 2</h3>';
    $arr = array("primeiro valor","segundo valor","terceiro valor");
    echo 'Os valores inicias do meu array...<br/>';
    print_r($arr);
    echo '<br/><br/>';
    $arr[] = 'quarto valor';
    $arr[] = 'quinto valor';
    echo 'Agora os valores do meu array...<br/>';
    print_r($arr);
    echo '<hr/>';
?>