<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Exercícios 2</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <label>Digite um número</label>
        <input type="text" name="n1"/>
        <br/><br/>
        <input type="submit" value="Mostrar o Fatorial"/>
    </form>
    <hr/>
<?php
    if(isset($_POST['n1']))
    {
        $n1 = $_POST['n1'];
        $resultado = 1;
        for($i = $n1; $i > 1; $i--){
            $resultado *= $n1;
            echo 'Fatorial de: '.$n1.' -Resultado: '.$resultado.'<br/>';
            $n1--;
        }
    }
    else
    {
        echo 'Sem valor!';
    }
?>
</body>
</html>