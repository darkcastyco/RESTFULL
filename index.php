<?php
$loader = require __DIR__ . '/vendor/autoload.php';

use REST\entidades\Usuario;
use REST\entidades\Ebook;
use REST\entidades\Questionario;
use REST\controlador\UsuarioController;
use REST\controlador\EbookController;
use REST\controlador\QuestionarioController;

$app = new \Slim\Slim ();

$usuarioCtrl = new UsuarioController();
$ebookCtrl = new EbookController();
$questionarioCtrl = new QuestionarioController();

$app->get ( '/', function () {
	echo json_encode ( [
			"api" => "REST",
			"version" => "1.0.0"
	] );
} );


$app->get ( '/usuario(/(:id))', function ($id = null) use  ($usuarioCtrl){
echo json_encode($usuarioCtrl->get($id));
});

$app->post ( '/usuario(/)', function () use  ($usuarioCtrl){
	$app = \Slim\Slim::getInstance ();
	$json = json_decode ( $app->request ()->getBody ());
	echo json_encode ($usuarioCtrl->insert( $json ) );

} );

$app->put ( '/usuario(/)', function () {
echo "PUT\n";
} );

$app->delete ( '/usuario/:id', function () {
	echo "DELETE\n";
} );


$app->get ( '/Ebook(/(:id))', function ($id = null) use  ($EbookCtrl){
echo json_encode($EbookCtrl->get($id));
});

$app->post ( '/Ebook(/)', function () use  ($EbookCtrl){
	$app = \Slim\Slim::getInstance ();
	$json = json_decode ( $app->request ()->getBody ());
	echo json_encode ($EbookCtrl->insert( $json ) );

} );

$app->put ( '/Ebook(/)', function () {
echo "PUT\n";
} );

$app->delete ( '/Ebook/:id', function () {
	echo "DELETE\n";
} );

$app->get ( '/Questionario(/(:id))', function ($id = null) use  ($QuestionarioCtrl){
echo json_encode($QuestionarioCtrl->get($id));
});

$app->post ( '/Questionario(/)', function () use  ($QuestionarioCtrl){
	$app = \Slim\Slim::getInstance ();
	$json = json_decode ( $app->request ()->getBody ());
	echo json_encode ($QuestionarioCtrl->insert( $json ) );

} );

$app->put ( '/Questionario(/)', function () {
echo "PUT\n";
} );

$app->delete ( '/Questionario/:id', function () {
	echo "DELETE\n";
} );


$app->run ();

?>
