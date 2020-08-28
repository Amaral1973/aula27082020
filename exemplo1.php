<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Exemplo 1</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <label>Digite um valor</label>
        <input type="text" name="valor"/>
        <input type="submit" value="Mostrar"/>
    </form>
    <hr/>
<?php
    if(isset($_POST['valor']))
    {
        $valor = $_POST['valor'];
        echo 'O valor foi: '.$valor;
    }
    else
    {
        echo 'Sem valor!';
    } 
?>
</body>
</html>