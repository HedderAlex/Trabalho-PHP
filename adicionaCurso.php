<?php
    require 'conectaBanco.php';
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    if($nome != "" and $tipo > 0 and $tipo < 5){
        $sql = "INSERT INTO curso(nome,tipo) VALUES ('$nome','$tipo')";
        $banco->query($sql);
        if($banco->affected_rows == 1){
            echo "<p> Curso cadastrado com sucesso!</p>";
        }
        else{
            echo "Erro ao inserir os dados";
        }
    }
    header('Location:index.php');
    $banco->close();
?>