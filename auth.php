<?php

$senha = $_POST['senha'];

if($senha == '123456'){
    session_start();
    $_SESSION['usuario'] = $_POST['login'];
    echo '<h1> Logado com sucesso! </h1>';
}
else{
    echo '<h1> Login ou senha incorretos! </h1>';
}