<?php
    include_once "dao/ConnectionFactory.php";
    include_once "dao/CursoDao.php";
    include_once "model/Curso.php";
    $cursoDao = new CursoDao();
    include 'view/curso.php';
?>