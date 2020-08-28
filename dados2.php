<?php
    if(isset($_POST['nome'],$_POST['idade'])){
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        echo 'Bem vindo ao site, '.$nome.'!<br/>';
        if($idade >=18){
            echo 'Pode entrar! Você tem '.$idade.' anos.';
        } else {
            echo 'Não pode entrar! Você tem '.$idade.' anos.';
        }
    }else{
        echo 'Sem valor!';
    }
?>