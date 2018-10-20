<?php
namespace REST\entidades;

 use REST\entidades\Entidade;

/**
 * @Entity
 * @Table(name="usuario")
 */
class Usuario extends Entidade{

  /**
  *	@var integer @Id
  *      @Column(name="id", type="integer")
  *      @GeneratedValue(strategy="AUTO")
  */
private $id;

/**
 *
 * @var string @Column(type="string", length=255)
 */
private $email;
/**
 *
 * @var string @Column(type="string", length=255)
 */
private $senha;
/**
 *
 * @var string @Column(type="string", length=255)
 */
private $nome;

/**
 *
 * @var string @Column(type="string", length=255)
 */
private $idade;
/**
 *
 * @var string @Column(type="string", length=255)
 */
private $sexo;
/**
 *
 * @var string @Column(type="string", length=255)
 */
private $tipousuario;


public function __construct($id = 0,$email= "" ,$senha= "" ,$nome= "",$idade= "" ,$sexo= "" ,$tipousuario= "" ){
$this->id = $id;
$this->email = $email;
$this->senha = $senha;
$this->nome = $nome;
$this->idade = $idade;
$this->sexo = $sexo;
$this->tipousuario = $tipousuario;
}

public static function construct($array){
$obj = new Usuario();
$obj->setId( $array['id']);
$obj->setEmail( $array['email']);
$obj->setSenha( $array['senha']);
$obj->setnome( $array['nome']);
$obj->setidade( $array['idade']);
$obj->setsexo( $array['sexo']);
$obj->settipousuario( $array['tipousuario']);
return $obj;

}

public function getId(){
return $this->id;
}

public function setId($id){
 $this->id=$id;
}

public function getEmail(){
return $this->email;
}

public function setEmail($email){
 $this->email=$email;
}

public function getSenha(){
return $this->senha;
}

public function setSenha($senha){
 $this->senha=$senha;
}

public function getnome(){
return $this->nome;
}

public function setnome($nome){
 $this->nome=$nome;
}

public function getidade(){
return $this->idade;
}

public function setidade($idade){
 $this->idade=$idade;
}

public function getsexo(){
return $this->sexo;
}

public function setsexo($sexo){
 $this->sexo=$sexo;
}

public function gettipousuario(){
return $this->tipousuario;
}

public function settipousuario($tipousuario){
 $this->tipousuario=$tipousuario;
}

public function equals($object){
if($object instanceof Usuario){

if($this->id!=$object->id){
return false;

}

if($this->email!=$object->email){
return false;

}

if($this->senha!=$object->senha){
return false;

}

if($this->nome!=$object->nome){
return false;

}

if($this->idade!=$object->idade){
return false;

}

if($this->sexo!=$object->sexo){
return false;

}

if($this->tipousuario!=$object->tipousuario){
return false;

}

return true;

}
else{
return false;
}

}
public function toString(){

 return "  [id:" .$this->id. "]  [email:" .$this->email. "]  [senha:" .$this->senha. "]  [nome:" .$this->nome. "][idade:" .$this->idade. "]  [sexo:" .$this->sexo. "]  [tipousuario:" .$this->tipousuario. "]  " ;
}

 public function toArray(){
   return [
  "id"=>$this->id,
   "email"=>$this->email,
   "nome"=>$this->nome,
   "idade"=>$this->idade,
   "sexo"=>$this->sexo];
 }

}

?>
