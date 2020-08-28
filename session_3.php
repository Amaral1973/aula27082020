<?php
    session_start();
    echo 'Bem vindo, '.$_SESSION['nome'].'. A 2º página.<br/>';
    echo '<br/>';
    echo '<a href="session.php">Voltar</a>';
?>