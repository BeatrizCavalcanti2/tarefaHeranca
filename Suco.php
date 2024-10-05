<?php

require_once 'Bebida.php'
class Suco extends Bebida{
    private $sabor;



    public function setSabor($sabor){
        $this->sabor=$sabor;
    }

   public function getSabor(){
    return $this->sabor;
   }


    public function mostraBebida(){
        return "Nome: {$this->nome}. Sabor: {$this->sabor}. Preço: {$this->preco}";
    }

    public function verificaPreco(){
        return $this->preco<2.5;
    }


}
?>