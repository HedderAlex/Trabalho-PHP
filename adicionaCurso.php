<?php
    require 'conectaBanco.php';
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $sql = "INSERT INTO curso(nome,tipo) VALUES ('$nome','$tipo')";
    $banco->query($sql);
    if($banco->affected_rows == 1){
        echo "<p> Curso cadastrado com sucesso!</p>";
    }
    header('Location:index.php');
    $banco->close();
?>