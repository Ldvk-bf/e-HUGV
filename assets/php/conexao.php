<?php
    $dns = 'mysql:host=localhost;dbname=db_hugv';
    $usuario = "Ludi";
    $senha = "Ludi601/";
    try {
        $conexao = new PDO($dns, $usuario, $senha);
    } catch(PDOExecption $e) {
        echo 'Erro: '.$e->getcode()."Mensagem: ".$e->getMessage();
    }
