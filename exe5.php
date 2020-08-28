<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Exercícios 5</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <label>Digite um número</label>
        <input type="text" name="n1"/>
        <br/><br/>
        <input type="submit" value="Mostrar a Tabuada"/>
    </form>
    <hr/>
<?php
    if(isset($_POST['n1']))
    {
        $n1 = $_POST['n1'];
        for($i = 1; $i <= 10; $i++){
            $resultado = $n1 * $i;
            echo $n1.' X '.$i.' = '.$resultado.'<br/>';
        }
    }
    else
    {
        echo 'Sem valor!';
    }
?>
</body>
</html>