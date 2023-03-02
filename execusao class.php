<?php

require_once("pessoa.class.php");

class teste{
    private $pessoa;

    public function _construct(){
        $pessoa = new Pessoa();

        $pessoa->setNome($_POST['nome']);
        echo $pessoa->getNome();

    }
}new Teste();

?>