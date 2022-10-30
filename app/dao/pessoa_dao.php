<?php
class pessoa_dao{
    private $conexao;

    /*crud completo
        insert -> create
        select -> read
        update -> ...
        delete -> ...
    */

    public function __construct(){
        $dns = "mysql:host=localhost:3306;dbname=mydb";
        $this->conexao = new PDO($dns, 'root', '06081016');
    }

    public function insert(pessoa_model $model){
        $sql = "insert into pessoa(nome, cpf, data_nascimento) values (?, ?, ?)";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->data_nascimento);

        $stmt->execute();
    }

    public function select(){
    	$sql = "select * from pessoa";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

	    return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    /* função para preencher o formulário com dados existentes -> para depois fazer o update*/
    public function select_by_id(int $id){
        $sql = "select * from pessoa where id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("pessoa_model");
    }

    public function update(pessoa_model $model){
        $sql = "update pessoa set nome = ?, cpf = ?, data_nascimento = ? where id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt ->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->data_nascimento);
        $stmt->bindValue(4, $model->id);
        $stmt->execute();
    }

    public function delete(int $id){
        $sql = "delete from pessoa where id =  ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}