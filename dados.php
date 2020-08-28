<?php
    if(isset($_POST['nome'],$_POST['idade'])){
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        echo 'Bem vindo ao site <b>'.$nome.'</b><br/>';
        if($idade <18){
            echo 'Você tem apenas <b>'.$idade.'</b>. Você não pode acessar este site!';
        }
        else{
            echo 'Você tem <b>'.$idade.'</b>. Você pode acessar este site!';
            sleep(5);
            header('Location: http://www.google.com');
        }
    }
    else {
        echo 'Sem valor!';
    }
?>