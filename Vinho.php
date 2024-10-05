<?php

require_once 'Bebida.php'
class Vinho extends Bebida{
    private $tipo;
    private $safra;



    public function setTipo($tipo){
        $this->tipo=$tipo;
    }


   public function setSafra($safra){
    $this->safra=$safra;
   } 

   public function getTipo(){
    return $this->tipo;
   }


   public function getSafra(){
    return $this->safra;
   }





    public function mostraBebida(){
        return "Nome: {$this->nome}. Tipo: {$this->tipo}. Preço: {$this->preco}. Safra: {$this->safra}.";
    }
    public function verificaPreco(){
        return $this->preco<25;
    }


}
?>