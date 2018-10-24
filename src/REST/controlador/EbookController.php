<?php

namespace REST\controlador;

use  REST\persistencia\EbookDAO;
use  REST\entidades\Ebook;
use  REST\entidades\Usuario;
use REST\controlador\AbstractController;


class EbookController extends AbstractController{

public function __construct() {
    parent::__construct(new EbookDAO ());
	}

	public function insert($json){
    $Ebook = new Ebook($json->id,$json->pedido,$json->produto,$json->quantidade);
    $this->getDao ()->insert ( $Ebook );
    return ["mensagem"=>"Pedido inserido com sucesso"];
	}

	public function update($id, $json){


  }

	public function delete($id){


  }
}
