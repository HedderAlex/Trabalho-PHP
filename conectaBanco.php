<?php
    $banco = new mysqli(
        "localhost","root","","universidade","1234"
    );
    if($banco->connect_errno){
        echo "Erroa ao conectar no banco de dados";
    }
?>