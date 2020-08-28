<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Acerte o número</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
        <label>Palpite</label>
        <input type="text" name="number"/>
        <br/><br/>
        <input type="submit" value="Verificar"/>
    </form>
    <hr/>
<?php
    if(isset($_GET['number']))
    {
        $palpite = $_GET['number'];
        $resposta = rand(1,10);
        if($palpite==$resposta)
            echo "Miseravi... Acertou!!! Era $resposta !";
                else
            echo "Errou.... Era $resposta !";
    }
    else
    {
        echo 'Sem valor!';
    }
?>
</body>
</html>