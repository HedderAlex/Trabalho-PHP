<?php
    require 'conectaBanco.php';
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $nasc = $_POST['nasc'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $curso = $_POST['curso'];
    $sql = "INSERT INTO aluno(cpf,nome,nasc,email,telefone,curso) VALUES ('$cpf','$nome','$nasc','$email','$fone','$curso')";
    $banco->query($sql);
    if($banco->affected_rows == 1){
        echo "<p> Aluno cadastrado com sucesso!</p>";
    }
    header('Location:index.php');
    $banco->close();
?>