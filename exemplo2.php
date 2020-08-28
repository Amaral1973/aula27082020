<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Exemplo 1</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <label>Digite o Valor1</label>
        <input type="text" name="valor1"/>
        <br/><br/>
        <label>Digite o Valor2</label>
        <input type="text" name="valor2"/>
        <br/>
        <input type="submit" value="Somar"/>
    </form>
    <hr/>
<?php
    if(isset($_POST['valor1']))
    {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $resultado = $valor1 + $valor2;
        echo 'O soma foi: '.$resultado;
    }
    else
    {
        echo 'Sem valor!';
    } 
?>
</body>
</html>