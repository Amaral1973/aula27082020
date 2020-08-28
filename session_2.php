<?php
    session_start();
    if(isset($_POST['nome']))
    {
        $_SESSION['nome'] = $_POST['nome'];
        echo 'Bem vindo, '.$_SESSION['nome'].'. A 1º página.<br/>';
    }
    else
    {
        echo 'Sem valor!';
    }
    echo '<br/>';
    echo '<a href="session.php">Voltar</a>';
    echo '<br/>';
    echo '<a href="session_3.php">Próxima Página</a>';
?>