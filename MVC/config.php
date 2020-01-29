<?php
    require 'enviroment.php';

    $config= array();

    if(ENVIROMENT == 'development') {
        define("BASE_URL","http://localhost/Classificados_mvc/MVC/");
        $config['dbname']= 'projeto_classificados';
        $config['host']= 'localhost';
        $config['dbuser']= 'root';
        $config['dbpass']= 'root';
    } else {
        define("BASE_URL","http://www.meusite.com.br/");
        $config['dbname']= 'MVC';
        $config['host']= 'localhost';
        $config['dbuser']= 'root';
        $config['dbpass']= 'root';
    }

    global $db;

    try {

        $db= new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],
        $config['dbuser'],$config['dbpass']);

    } catch(PDOException $e) {
        echo "Erro".$e->getMessage();
    }
?>