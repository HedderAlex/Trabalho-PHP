<?php
class AlunoDao{
    public function inserir(Aluno $a1){
        try{
            $sql = "INSERT INTO aluno(cpf,nome,nasc,email,telefone,curso) VALUES (:cpf, :nome, :nasc, :email, :telefone, :curso);";
            $con_sql = ConnectionFactory::getConnection()->prepare($sql);
            $con_sql->bindValue(":cpf", $a1->getCpf());
            $con_sql->bindValue(":nome", $a1->getNome());
            $con_sql->bindValue(":nasc", $a1->getNasc());
            $con_sql->bindValue(":email", $a1->getEmail());
            $con_sql->bindValue(":telefone", $a1->getTelefone());
            $con_sql->bindValue(":curso", $a1->getCurso());
            return $con_sql->execute();
        }catch(Exception $e){
            print "<p>Erro ao inserir Aluno</p><p>$e</p>";
        }
    }

    public function read(){
        try{
            $sql = "SELECT * FROM aluno";
            $result = ConnectionFactory::getConnection()->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach($lista as $l){
                $a1_lista[] = $this->listaAlunos($l);
            }
            return $a1_lista;
        }catch(Exception $e){
            print "Ocorreu um erro: " . $e;
        }
        
    }

    public function listaAlunos($row){
        $aluno = new Aluno;
        $aluno->setCpf($row['cpf']);
        $aluno->setNome($row['nome']);
        $aluno->setNasc($row['nasc']);
        $aluno->setEmail($row['email']);
        $aluno->setTelefone($row['telefone']);
        $aluno->setCurso($row['curso']);
        return $aluno;
    }

    public function delete(Aluno $aluno) {
        try {
            $sql = "DELETE FROM aluno WHERE cpf = :cpf";
            $p_sql = ConnectionFactory::getConnection()->prepare($sql);
            $p_sql->bindValue(":cpf", $aluno->getCpf());
            return $p_sql->execute();
        } catch (Exception $e) {
            echo "Erro ao Excluir Aluno<br>$e<br>";
        }
    }
}
?>