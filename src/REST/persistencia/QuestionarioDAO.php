]<?php

namespace REST\persistencia;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use REST\entidades\Questionario;
use REST\persistencia\AbstractDAO;
use REST\persistencia\UsuarioDAO;

class QuestionarioDAO extends AbstractDAO{

public function __construct() {
		parent::__construct('REST\entidades\Questionario');
	}


}
