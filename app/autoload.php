<?php

spl_autoload_register(
    //função do php para fazer autoload.
    //spl: standard php library
    function ($nome_classe){
        //função anônima/lambda definida no parâmetro da função
        $classe_controller = 'controller/' . $nome_classe . ".php";
        $classe_model = 'model/' . $nome_classe . ".php";
        $classe_dao = 'dao/' . $nome_classe . ".php";

        if (file_exists($classe_model)){
            //verificando se o arquivo existe para incluí-lo
            include $classe_model;

        }else if (file_exists($classe_controller)){

            include $classe_controller;

        }else if (file_exists($classe_dao)){

            include $classe_dao;

        }
    }
);