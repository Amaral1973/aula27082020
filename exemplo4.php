<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Exemplo de Laço - FOR</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <label>Quantidade de vezes que o laço irá repetir</label>
        <input type="text" name="laco"/>
        <br/><br/>
        <label>Digite uma palavra</label>
        <input type="text" name="palavra"/>
        <br/><br/>
        <input type="submit" value="Mostrar"/>
    </form>
    <hr/>
<?php
    if(isset($_POST['laco'],$_POST['palavra']))
    {
        $laco = $_POST['laco'];
        $palavra = $_POST['palavra'];
        for($i = 1; $i <= $laco; $i++){
        echo '<br/>'.$i.' - '.$palavra;
    }}
    else
    {
        echo 'Sem valor!';
    }
?>
</body>
</html>