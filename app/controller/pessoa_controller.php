<?php
class pessoa_controller{
    public static function index(){//retorna a listagem de pessoas
        $model = new pessoa_model();
        $model->get_all_rows();	

        include 'view/modules/pessoa/lista.php';
    }

    public static function form(){
        include 'model/pessoa_model.php';
        $model = new pessoa_model();
        $model = $model->get_by_id( (int) $_GET['id']);// converter para inteiro -> variável global get

        //var_dump($model);//função pré definida do php para descrever variáveis

        include 'view/modules/pessoa/form.php';
    }

    public static function save(){
        include 'model/pessoa_model.php';
        $model = new pessoa_model();

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->cpf = $_POST['cpf'];
        $model->data_nascimento = $_POST['data_nascimento'];

        $model->save();

        header("Location: /pessoa");
    }

    public static function delete(){
        include 'model/pessoa_model.php';
        $model = new pessoa_model();

        $model->delete( (int) $_GET['id']);

        header("Location: /pessoa");
    }
}