<?php
    session_start();
    if(isset($_POST['nome']))
    {
        $_SESSION['usuario'] = $_POST['nome'];
        echo 'Bem vindo, '.$_SESSION['usuario'].'. A 1º página<br/>';
    }
    else
    {
        echo 'Sem valor!';
    }
    echo '<br/>';
    echo '<a href="session.php">Voltar</a>';
    echo '<br/>';
    echo '<a href="session3.php">Próxima Página</a>';
?>