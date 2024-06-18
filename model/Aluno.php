<?php
class Aluno{
    private $cpf;
    private $nome;
    private $nasc;
    private $email;
    private $telefone;
    private $curso;
/*
    public function __construct($cpf, $nome, $nasc, $email, $telefone){
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->nasc = $nasc;
        $this->email = $email;
        $this->telefone = $telefone;
    }
*/
    public function getCpf(){
        return $this->cpf;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNasc(){
        return $this->nasc;
    }
    public function setNasc($nasc){
        $this->nasc = $nasc;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function setCurso(Curso $curso){
        $this->curso = $curso;
    }
    public function __toString(){
        return "Aluno: CPF: {$this->cpf} - Nome: {$this->nome} - Nascimento: {$this->nasc} - Email: {$this->email} - Telefone: {$this->telefone} - {$this->curso->__toString()}";
    }
}
?>