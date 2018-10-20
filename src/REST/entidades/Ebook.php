<?php
namespace REST\entidades;

 use REST\entidades\Entidade;
/**
 * @Entity
 * @Table(name="Ebook")
 */
class Ebook extends Entidade{

  /**
  *	@var integer @Id
  *      @Column(name="id", type="integer")
  *      @GeneratedValue(strategy="AUTO")
  */
private $id;
/**
	 * @ManyToOne(targetEntity="Usuario",cascade={"persist"})
	 * @JoinColumn(name="pedido_id", referencedColumnName="id")
	 */
private $pedido;
/**
 *
 * @var string @Column(type="string", length=255)
 */
private $produto;
/**
 *
 * @var string @Column(type="string", length=255)
 */
private $quantidade;
/**
 *
 * @var string @Column(type="string", length=255)
 */
private $liberado;

public function __construct($id = 0,$pedido= null,$produto= "" ,$quantidade = "",$liberado = ""){
$this->id = $id;
$this->pedido = $pedido;
$this->produto = $produto;
$this->quantidade = $quantidade;
$this->liberado = $liberado;

}

public static function construct($array){
$obj = new Ebook();
$obj->setId( $array['id']);
$obj->setProduto( $array['produto']);
$obj->setQuantidade( $array['quantidade']);
$obj->setLiberado( $array['liberado']);
return $obj;

}

public function getId(){
return $this->id;
}

public function setId($id){
 $this->id=$id;
}

public function getPedido(){
return $this->pedido;
}

public function setPedido($pedido){
 $this->pedido=$pedido;
}

public function getProduto(){
return $this->produto;
}

public function setProduto($produto){
 $this->produto=$produto;
}

public function getQuantidade(){
return $this->quantidade;
}

public function setQuantidade($quantidade){
 $this->quantidade=$quantidade;
}
public function getLiberado(){
return $this->liberado;
}

public function setLiberado($liberado){
 $this->liberado=$liberado;
}

public function equals($object){
if($object instanceof Ebook){

if($this->id!=$object->id){
return false;

}

if($this->pedido!=$object->pedido){
return false;

}

if($this->produto!=$object->produto){
return false;

}

if($this->quantidade!=$object->quantidade){
return false;

}

if($this->liberado!=$object->liberado){
return false;
}

return true;

}
else{
return false;
}

}
public function toString(){

 return "  [id:" .$this->id. "]  [pedido:" .$this->pedido. "]  [produto:" .$this->produto. "]  [quantidade:" .$this->quantidade. "] [liberado:" .$this->liberado. "]  " ;
}

 public function toArray(){
   return [
  "id"=>$this->id,
   "produto"=>$this->produto,
   "quantidade"=>$this->quantidade,
   "liberado"=>$this->liberado];
 }

}
