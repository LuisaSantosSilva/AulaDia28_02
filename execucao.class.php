<?php

//importação (forma de importar meu projeto para dentro do meu arquivo)
require_once("pessoa.class.php");
//nome classe
class Execucao {
    //objeto pessoa com a classe privada
    private $pessoa;

    public function __construct(){
        //objeto chamado pessoa que recebe a classe pessoa
        $pessoa = new pessoa();

        //passar um valor para o métodod setNome
        $pessoa ->setNome('Luisa');

        //imprimir o valor do método getNome
        echo $pessoa -> getNome();
    }
}new Execucao();

?>