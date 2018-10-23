<?php

namespace REST\controlador;

use  REST\persistencia\EbookDAO;
use  REST\entidades\Ebook;
use  REST\entidades\Item;
use  REST\entidades\Usuario;
use REST\controlador\AbstractController;
use DateTime;

class EbookController extends AbstractController{

public function __construct() {
    parent::__construct(new EbookDAO ());
	}

	public function insert($json){
	$itens = array();

	foreach($json->itens as $item){
		$i = new Item();
		$i->setQuantidade($item->quantidade);
		$i->setProduto($item->produto);
		$items[] = $i;
	}

	$user = new Usuario($json->usuarioId);
	$hora = new DateTime("now");
	$Ebook = new Ebook(0,$hora,$user,$itens);

    $this->getDao ()->insert ( $Ebook );
    return array("sucess"=>"true","input"=>$json);
	}
	public function update($id, $json){


  }
	public function delete($id){


  }
}
