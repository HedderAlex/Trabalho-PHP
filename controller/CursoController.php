<?php
include_once "../dao/ConnectionFactory.php";
include_once "../dao/CursoDao.php";
include_once "../model/Curso.php";

$curso = new Curso();
$cursoDao = new CursoDao();

$d = filter_input_array(INPUT_POST);

if(isset($_POST['cadastrar'])){
    $curso->setNome($d['nome']);
    $curso->setTipo($d['tipo']);
    $cursoDao->inserir($curso);
    header("Location: ../CursoForm.php");
}
else if(isset($_GET['del'])){
    $curso->setId($_GET['del']);
    $cursoDao->delete($curso);
    header("Location: ../CursoForm.php");
}
?>