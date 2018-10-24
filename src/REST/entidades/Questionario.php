<?php
namespace REST\entidades;

/**
 * @Entity
 * @Table(name="Questionario")
 */
class Questionario extends Entidade{

  /**
  *	@var integer @Id
  *      @Column(name="id", type="integer")
  *      @GeneratedValue(strategy="AUTO")
  */
private $id;

/**
	 * @ManyToOne(targetEntity="Usuario",cascade={"persist"})
	 * @JoinColumn(name="usuario_id", referencedColumnName="id")
	 */
private $usuario;
/**
 *
 * @var string @Column(type="string", length=255)
 */
private $Questionario;
/**
 *
 * @var string @Column(type="string", length=255)
 */
private $Resultado;
public function __construct($id = 0,$usuario = 0,$Questionario = "",$Resultado = ""){
$this->id = $id;
$this->usuario = $usuario;
$this->Questionario = $Questionario;
$this->Resultado = $Resultado;
}

public static function construct($array){
$obj = new Questionario();
$obj->setId( $array['id']);
$obj->setUsuario( $array['usuario']);
$obj->setQuestionario( $array['Questionario']);
$obj->setResultado( $array['Resultado']);
return $obj;

}

public function getId(){
return $this->id;
}

public function setId($id){
 $this->id=$id;
}


public function getUsuario(){
return $this->usuario;
}

public function setUsuario($usuario){
 $this->usuario=$usuario;
}

public function getQuestionario(){
return $this->Questionario;
}

public function setQuestionario($Questionario){
 $this->Questionario=$Questionario;
}

public function setResultado($Resultado){
 $this->Resultado=$Resultado;
}

public function getResultado(){
return $this->resultado;
}


public function equals($object){
if($object instanceof Questionario){

if($this->id!=$object->id){
return false;

}


if($this->usuario!=$object->usuario){
return false;

}

if($this->Questionario!=$object->Questionario){
return false;

}

if($this->resultado!=$object->resultado){
return false;

}
return true;

}
else{
return false;
}

}
public function toString(){

 return "  [id:" .$this->id. "] [usuario:" .$this->usuario. "]  [Questionario:" .$this->Questionario. "] [Resultado:" .$this->resultado. "]  " ;
}

 public function toArray(){
   return [
  "id"=>$this->id,
   "usuario"=>$this->usuario->toArray(),
   "Questionario"=>$this->Questionario,
    "Resultado"=>$this->resultado
   ];
 }

}
