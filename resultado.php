<?php
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    if(isset($_POST['nome'],$_POST['idade'])){
    echo 'Bem vindo ao site <b>'.$nome.'.</b><br/>';
    if ($idade <=18){
        echo 'Você tem <b>'.$idade.'</b>. Você não pode acessar este site.';
    }
    else {
        echo 'Você tem <b>'.$idade.'</b>. Você pode acessar este site.';   
    }}
    else
    {
        echo 'Campo sem valor!';
    }
    echo '<br/><br/>';
    echo '<a href="campos_post.php">Voltar</a>';
?>