<?php
    require 'conectaBanco.php';
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $sql = "INSERT INTO login(email, senha) VALUES ('$usuario','$senha')";
    $banco->query($sql);
    if($banco->affected_rows >= 1){
        echo "<p> Usuário $usuario cadastrado com sucesso!</p>";
    }
    $banco->close();
?>