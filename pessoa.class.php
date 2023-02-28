<?php

//classe com o nome pessoa
class Pessoa {

    // expliocação do professor: chamados atributos ou objetos
    //toda vez que fizermos um objeto ou atributo temos que fazer privado
//get retorna o valor do objeto (ler algo de uma classe em outra classe)
//set funciona como alteração de valor

    //objetos com visibilidade privada
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;

    //métodod de captura de valor de objeto
    public function getNome(){
        return $this->nome;
    }

    //Método de alteração de valor objeto
    public function setNome($nome){
        return $this->nome = $nome;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        return $this->endereco = $endereco;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function setBairro($bairro){
        return $this->bairro = $bairro;
    }

    public function getCep(){
        return $this->cep;
    }

    public function setCep($cep){
        return $this->cep = $cep;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setCidade($cidade){
        return $this->cidade = $cidade;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($estado){
        return $this->estado = $estado;
    }




    
    /*
    Criar os respectivos métodos GETs e SETs.
    */

}

?>