<?php
include_once "../dao/ConnectionFactory.php";
include_once "../dao/AlunoDao.php";
include_once "../model/Aluno.php";

$aluno = new Aluno();
$cursoDao = new AlunoDao();

$d = filter_input_array(INPUT_POST);

if(isset($_POST['cadastrar'])){
    $aluno->setCpf($d['cpf']);
    $aluno->setNome($d['nome']);
    $aluno->setNasc($d['nasc']);
    $aluno->setEmail($d['email']);
    $aluno->setTelefone($d['telefone']);
    $aluno->setCurso($d['curso']);
    $alunoDao->inserir($aluno);
    header("Location: ../AlunoForm.php");
}
else if(isset($_GET['del'])){
    $aluno->setCpf($_GET['del']);
    $alunoDao->delete($curso);
    header("Location: ../AlunoForm.php");
}
?>