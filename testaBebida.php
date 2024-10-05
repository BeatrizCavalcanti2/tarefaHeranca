<?php

require_once 'Refrigerante.php';
require_once 'Suco.php';
require_once 'Vinho.php';

if(isset($_POST['okvinho'])){
    $nome=$_POST['nomevinho'];   
    $preco=$_POST['precovinho'];
    $tipo=$_POST['tipo']
    $safra=$_POST['safra'];

    $suco1= new Suco($nome, $preco, $sabor);
}


$vinho1= new Vinho($nome, $tipo, $preco, $safra);

if(isset($_POST["vervinho"]) && isset($vinho1)){
  echo $vinho1-> mostraBebida();
}

if(isset($_POST["verprecovinho"]) && isset($vinho1)){
    echo $vinho1->verificarPreco($preco);
}

if(isset($_POST['oksuco'])){
    $nome=$_POST['nomesuco'];   
    $preco=$_POST['precosuco'];
    $sabor=$_POST['sabor'];

    $suco1= new Suco($nome, $preco, $sabor);
}



if(isset($_POST["verprecosuco"]) && isset($suco1)){
    echo $suco1->mostraBebida();
}

if(isset($_POST["verprecosuco"]) && isset($suco1)){
    echo $suco1->verificarPreco($preco);
}

if(isset($_POST['okrefri'])){
    $nome=$_POST['nomerefri'];   
    $preco=$_POST['precorefri'];
    
    if (isset($_POST['retornavel'])) {
        $retornavel = true; 
    } else {
        $retornavel = false; 
    }

    $refri1= new Refrigerante($nome, $preco, $retornavel);
}



if(isset($_POST["verefri"]) && isset($refri1)){
    echo $refri1->mostraBebida();
}

if(isset($_POST["verprecorefri"]) && isset($refri1)){
    echo $refri1->verificarPreco($preco);
}














?>