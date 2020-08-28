<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Jogo</title>
</head>
<body>
<?php
    $numero = $_POST['n1'];
?>
    <h1>Acerte o número</h1>
    <hr/>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <label>Digite um número</label>
        <input type="text" name="numero"/>
        <br/><br/>
        <input type="submit" value="Verificar"/>
    </form>
    <hr/>
<?php
    if(isset($_POST['numero']))
    {
        $tentativa = $_POST['numero'];
        if($tentativa = $numero){
            echo 'Muito bem você descobriu o número';
        }
        else {
            echo 'Tente novamente...';
        }
    }
    else
    {
        echo 'Sem valor!';
    }
?>
</body>
</html>