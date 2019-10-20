<?php
require 'inc/configuration.php';
require 'inc/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

// GET route
$app->get(
    '/',
    function () {
        require_once("view/index.php");
    }
);

$app->post(
    '/loja',
    function () {
        require_once("view/loja.php");
    }
);

$app->get("/loja-:name", function($name){

	
	
$sql = new Sql();
//$busca = "fone";
$data = $sql->select("select * from tb_produtos where nome_prod_longo LIKE '%$name%' or nome_prod_curto LIKE '%$name%' ORDER BY preco_real desc;");
	
		foreach ($data as &$produto) {
        $preco = $produto['preco_real'];
        $centavos = explode(".", $preco);
        $produto['preco_real'] = number_format($preco, 0, ",", ".");
        $produto['centavos'] = end($centavos);
        $produto['parcelas'] = number_format($preco/$produto['parcelamento'], 2, ",", ".");
        $produto['total'] = number_format($preco, 2, ",", ".");
    }
	
	$linhas = count($data);
	
	require_once("view/loja.php");
});

$app->get(
    '/servico',
    function () {
        require_once("view/servico.php");
    }
);
$app->get(
    '/shop',
    function () {
        require_once("view/index.php");
    }
);

$app->get(
    '/ajuda',
    function () {
        require_once("view/ajuda.php");
    }
);

$app->get(
    '/vitrine',
    function () {
        require_once("view/vitrine.php");
    }
);

$app->get(
    '/orcamento',
    function () {
        require_once("view/solicita-os.php");
    }
);

$app->get('/celulares', function(){

    $sql = new Sql();

    $data = $sql->select("SELECT * FROM tb_produtos p join tb_categoria c on p.id_key_categoria = c.cat_id WHERE p.id_key_categoria = 7  order by preco_desc limit 5;");

	echo json_encode($data);
	
});

$app->get('/carregadores', function(){

    $sql = new Sql();

    $data = $sql->select("SELECT * FROM tb_produtos p join tb_categoria c on p.id_key_categoria = c.cat_id WHERE p.id_key_categoria > 1 order by c.cat_id limit 5;");

	echo json_encode($data);
	
});

$app->get('/acessorios', function(){

    $sql = new Sql();

    $data = $sql->select("SELECT * FROM tb_produtos p join tb_categoria c on p.id_key_categoria = c.cat_id WHERE p.id_key_categoria = 1  order by preco_desc limit 5");
	

	echo json_encode($data);
	
});



$app->get("/produto-:cod", function($cod){
	
	$sql = new Sql();

    $produtos = $sql->select("select * from tb_produtos p join tb_fotos f on p.id_prod = f.id_key_produto where id_prod = $cod");
	
	$produto = $produtos[0];
	$foto = $produto['prod_foto_principal'];
	$preco_real = $produto['preco_real'];
	$produto['parcelas'] = 10;
    $produto['parcela'] = number_format($preco_real/$produto['parcelas'], 2, ",", ".");
	$id = $produtos[0]['id_key_categoria'];
	
	$sql = new Sql();
	
    $imagen = $sql->select("SELECT id_caminho FROM tb_fotos where id_key_produto = $cod order by id_foto;");
	
	$linha = count($imagen);
	
	/*	$sql = new Sql();*/


		
	require_once("view/vitrine.php");
});

$app->get('/mercadoria', function(){

    $sql = new Sql();

    $data = $sql->select("SELECT * FROM tb_produtos p join tb_categoria c on p.id_key_categoria = c.cat_id WHERE p.id_key_categoria = $cat  order by preco_desc limit 5");

	echo json_encode($data);
	
});

$app->run();


/*
var_dump($cod);
echo json_encode($produtos);
*/

?>