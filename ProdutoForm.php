<?php
    include_once "dao/ConnectionFactory.php";
    include_once "dao/AlunoDao.php";
    include_once 'model/Aluno.php';
    if(isset($_POST['cpf']) and isset($_POST['nome']) and isset($_POST['nasc']) and isset($_POST['email']) and isset($_POST['telefone'])){
        $a1 = new Aluno($_POST['cpf'],$_POST['nome'], $_POST['nasc'], $_POST['email'], $_POST['telefone']);
        $c1 = new Curso;
        $c1->setNome($_POST['curso']);
        $a1->setCurso($c1);
        echo $a1->__toString();
        include_once 'dao/ConnectionFactory.php';
        $bd = new ConnectionFactory;
    }
    include_once 'view/aluno.php';
?>