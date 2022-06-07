<?php
class pessoa_controller{
    public static function index(){//retorna a listagem de pessoas
        include 'view/modules/pessoa/lista.php';
    	include 'model/pessoa_model.php';

	$model = new pessoa_model();
	$model->get_all_rows();	
    }

    public static function form(){
        include 'view/modules/pessoa/form.php';
    }

    public static function save(){
        include 'model/pessoa_model.php';
        $model = new pessoa_model();

        $model->nome = $_POST['nome'];
        $model->cpf = $_POST['cpf'];
        $model->data_nascimento = $_POST['data_nascimento'];

        $model->save();

        header("Location: /pessoa");
    }
}