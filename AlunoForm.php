<?php
    include_once "dao/ConnectionFactory.php";
    include_once "dao/AlunoDao.php";
    include_once "model/Aluno.php";
    $alunoDao = new AlunoDao();
    include 'view/aluno.php';
?>