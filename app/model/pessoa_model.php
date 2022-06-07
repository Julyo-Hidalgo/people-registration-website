<?php
class pessoa_model{
    public $id, $nome, $cpf, $data_nascimento, $rows;

    public function save(){
        include 'dao/pessoa_dao.php';
        $dao = new pessoa_dao();
	    $dao->insert($this);
    }

    public function get_all_rows(){
    	include 'dao/pessoa_dao.php';

        $dao = new pessoa_dao();
        $this->rows = $dao->select();
    }
}
