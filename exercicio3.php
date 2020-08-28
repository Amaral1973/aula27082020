<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Exercícios 3</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <label>Digite o 1º número</label>
        <input type="text" name="n1"/>
        <br/><br/>
        <label>Digite o 2º número</label>
        <input type="text" name="n2"/>
        <br/><br/>
        <input type="submit" value="Mostrar Intervalo"/>
    </form>
    <hr/>
<?php
    if(isset($_POST['n1'],$_POST['n2']))
    {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        if($n1 > $n2){
            for($i = $n2+1; $i < $n1; $i++){
                echo 'Número: '.$i.'<br/>';
            }
        }else {
            for($i = $n1+1; $i < $n2; $i++){
                echo 'Número: '.$i.'<br/>';
            }
        }

    }
    else
    {
        echo 'Sem valor!';
    }
?>
</body>
</html>