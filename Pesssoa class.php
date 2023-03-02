<?php
//classe com o nome pessoa
class Pessoa{
    //objetos com visibilidade privadas
    private $nome;
    private $endereço;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;

    //método de captura de valor objeto 
    public function getNone(){
        return $this->nome;
    }

    //método de alteração de valor de objeto
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getBairro(){
        return $this->bairro;
    }
    
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }

    public function getCep(){
        return $this->$cep;
    }

    public function setCep($cep){
        $this->cep = $cep;
    }

    public function getCidade(){
        return $this->$cidade;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    public function getEstado(){
        return $this->$estado;
    }

    public function setEstadp($estado){
        $this->estado = $estado;
    }

    /*
    Criar os respectivos métodos GETs e SETs.
    */

}

?>