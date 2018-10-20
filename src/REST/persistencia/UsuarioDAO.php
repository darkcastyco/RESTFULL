<?php

namespace REST\persistencia;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use REST\persistencia\AbstractDAO;
use REST\entidades\Usuario;

class UsuarioDAO extends AbstractDAO{

public function __construct() {
		parent::__construct('REST\entidades\Usuario');
	}


}
