<?php
    $banco = new mysqli(
        "localhost","root","","universidade","3306"
    );
    if($banco->connect_errno){
        echo "Erroa ao conectar no banco de dados";
    }
?>