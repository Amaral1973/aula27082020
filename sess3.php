<?php
    session_start();
    echo 'Bem vindo ao site '.$_SESSION['nome'];
    echo '<a href="sess.php">Voltar</a>';
?>