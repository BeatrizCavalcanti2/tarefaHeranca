<?php

require_once 'Bebida.php'
class Refrigerante extends Bebida{
    private $retornavel;



    public function setRertornavel($retornavel){
        $this->retornavel=$retornavel;
    }

   public function getRetornavel(){
    return $this->retornavel;
   }


    public function mostraBebida(){
        return "Nome: {$this->nome}. Retornavel: {$this->retornavel}. Preço: {$this->preco}";
    }

    public function verificaPreco(){
        return $this->preco<5;
    }


}
?>