<?php
class CursoDao{
    public function inserir(Curso $c1){
        try{
            $sql = "INSERT INTO curso(nome,tipo) VALUES (:nome, :tipo);";
            $con_sql = ConnectionFactory::getConnection()->prepare($sql);
            $con_sql->bindValue(":nome", $c1->getNome());
            $con_sql->bindValue(":tipo", $c1->getTipo());
            return $con_sql->execute();
        }catch(Exception $e){
            print "<p>Erro ao inserir Curso</p><p>$e</p>";
        }
    }

    public function read(){
        try{
            $sql = "SELECT * FROM curso";
            $result = ConnectionFactory::getConnection()->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $c1_lista = [];
            foreach($lista as $l){
                $c1_lista[] = $this->listaCursos($l);
            }
            return $c1_lista;
        }catch(Exception $e){
            print "Ocorreu um erro: " . $e;
        }
        
    }

    public function listaCursos($row){
        $curso = new Curso;
        $curso->setId($row['id']);
        $curso->setNome($row['nome']);
        $curso->setTipo($row['tipo']);
        return $curso;
    }

    public function delete(Curso $curso) {
        try {
            $sql = "DELETE FROM curso WHERE id = :id";
            $p_sql = ConnectionFactory::getConnection()->prepare($sql);
            $p_sql->bindValue(":id", $curso->getId());
            return $p_sql->execute();
        } catch (Exception $e) {
            echo "Erro ao Excluir Curso<br>$e<br>";
        }
    }
}
?>