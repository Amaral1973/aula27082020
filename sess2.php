<?php
    session_start();
    if(isset($_POST['nome'])){
        $_SESSION['nome'] = $_POST['nome'];
        echo 'Bem vindo ao site '.$_SESSION['nome'];
    }
    else {
        echo 'Sem valor!';
    }
    echo '<a href="sess.php">Voltar</a>';
    echo '<br/>';
    echo '<a href="sess3.php">Próxima Página</a>';
?>