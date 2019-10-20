<?php
require 'inc/configuration.php';
require 'inc/Slim-2.x/Slim/Slim.php';

Class Usuario{
	
	public function conectar(){
		
		//connectar bd
	}	
	
	public function cadastra(){
		
	// cadastra novos usuarios	
	}
	
	public function logar(){
		
		//logar no bd
		
	}
	
}
//public function logar($login, $senha){};


\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

// GET route
$app->get(
    '/',
    function () {
        require_once("view/index.html");
    }
);

$app->get(
    '/logar',
    function () {

		
        require_once("view/lista-cliente.html");
    }
);

$app->run();


/*

var_dump($cod);
echo json_encode($produtos);
echo json_encode($produtos);

*/



