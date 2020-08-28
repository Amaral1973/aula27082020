<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Exemplo 1</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <label>Digite o Peso</label>
        <input type="text" name="peso"/>
        <br/><br/>
        <label>Digite a Altura</label>
        <input type="text" name="altura" placeholder="Ex: 1.80" />
        <br/>
        <input type="submit" value="IMC"/>
    </form>
    <hr/>
<?php
    if(isset($_POST['peso'], $_POST['altura']))
    {
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $conta1 = $altura * $altura;
        $conta2 = $peso / $conta1;
        echo 'Seu IMC foi de: '.number_format($conta2, 2);
    }
    else
    {
        echo 'Sem valor!';
    } 
?>
</body>
</html>