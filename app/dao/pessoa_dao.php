<?php
class pessoa_dao{
    private $conexao;

    public function __construct(){
        $dns = "mysql:host=localhost:3307;dbname=mydb";
        $this->conexao = new PDO($dns, 'root', 'etecjau');
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
	$stmt->execute;

	return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}