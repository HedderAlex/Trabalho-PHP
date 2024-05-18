<?php
    $banco = new mysqli(
        "localhost","root","nomeprovisorio","1234"
    );
    if($banco->connect_errno){
        echo "Erroa ao conectar no banco de dados";
    }
    $banco->close();
?>