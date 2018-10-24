<?php

namespace REST\controlador;

use  REST\persistencia\QuestionarioDAO;
use  REST\entidades\Questionario;
use  REST\entidades\Usuario;
use REST\controlador\AbstractController;


class QuestionarioController extends AbstractController{

public function __construct() {
    parent::__construct(new QuestionarioDAO ());
	}

	public function insert($json){
    $Questionario = new Questionario($json->id,$json->usuario,$json->questionario,$json->resultado);
    $this->getDao ()->insert ( $Questionario );
    return ["mensagem"=>"Questionario inserido com sucesso"];
	}

	public function update($id, $json){


  }

	public function delete($id){


  }
}
