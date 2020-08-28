<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Exercícios 4</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <label>Digite o 1º número</label>
        <input type="text" name="n1"/>
        <br/><br/>
        <label>Digite o 2º número</label>
        <input type="text" name="n2"/>
        <br/><br/>
        <input type="submit" value="Resultado"/>
    </form>
    <hr/>
<?php
    if(isset($_POST['n1'],$_POST['n2']))
    {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $soma = $n1 + $n2;
        if($soma > 20){
            $soma2 = $n1 + $n2 + 8;
            echo 'A soma dos valores foi maior que 20, acréscimo de 8, resultado: '.$soma2;
        } else {
            $soma2 = ($n1 + $n2) - 5;
            echo 'A soma dos valores não foi maior que 20, desconto de 5, resultado: '.$soma2;
        }
    }
    else
    {
        echo 'Sem valor!';
    }
?>
</body>
</html>