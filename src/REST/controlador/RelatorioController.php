<?php

namespace REST\controlador;

use  REST\persistencia\RelatorioDAO;
use  REST\entidades\Relatorio;
use REST\controlador\AbstractRelatorio;

class RelatorioController extends AbstractController {

	function getConn()
	{
		return new PDO('mysql:host=localhost;dbname=REST',
		'root',
		'',
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	}

	public function getrelatorio1($json)
	{
	$stmt = getConn()->query("SELECT questionario,sexo,idade FROM Relatorio WHERE $json->sexo ");
	$categorias = $stmt->fetchAll(PDO::FETCH_OBJ);
	echo "{Relatorio:".json_encode($resultado)."}";
	}

	public function getrelatorio2($json)
	{
	$stmt = getConn()->query("SELECT questionario,sexo,idade FROM Relatorio WHERE $json->sexo ");
	$categorias = $stmt->fetchAll(PDO::FETCH_OBJ);
	echo "{Relatorio:".json_encode($resultado)."}";
	}

	public function getrelatorio3($json)
	{
	$stmt = getConn()->query("SELECT questionario,sexo,idade FROM Relatorio WHERE $json->sexo ");
	$categorias = $stmt->fetchAll(PDO::FETCH_OBJ);
	echo "{Relatorio:".json_encode($resultado)."}";
	}

}
