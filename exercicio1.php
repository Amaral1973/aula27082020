<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Exercícios 1</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <label>Digite o 1º número</label>
        <input type="text" name="n1"/>
        <br/><br/>
        <label>Digite o 2º número</label>
        <input type="text" name="n2"/>
        <br/><br/>
        <label>Digite o 3º número</label>
        <input type="text" name="n3"/>
        <br/><br/>
        <input type="submit" value="Mostrar em Ordem Decrescente"/>
    </form>
    <hr/>
<?php
    if(isset($_POST['n1'],$_POST['n2'],$_POST['n3']))
    {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];
        if ($n1 > $n2){
            if($n2 > $n3){
                echo '<br/>'.$n1.'<br/>'.$n2.'<br/>'.$n3;
            }
            else
            {
                if($n1 > $n3){
                    echo '<br/>'.$n1.'<br/>'.$n3.'<br/>'.$n2;
                }
                else
                {
                    echo '<br/>'.$n3.'<br/>'.$n1.'<br/>'.$n2;
                }
            }
        }
        else
        {
            if($n2 > $n3){
                if($n1 > $n3){
                    echo '<br/>'.$n2.'<br/>'.$n1.'<br/>'.$n3;
                }
                else
                {
                    echo '<br/>'.$n2.'<br/>'.$n3.'<br/>'.$n1;
                }
            }
            else
            {
                echo '<br/>'.$n3.'<br/>'.$n2.'<br/>'.$n1;
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