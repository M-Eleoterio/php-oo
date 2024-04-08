<?php

abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;
    
    public final function fazerAniversario() {
        $this->idade ++;
                
    }
    
    function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }
    
    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setIdade($idade): void {
        $this->idade = $idade;
    }

    function setSexo($sexo): void {
        $this->sexo = $sexo;
    }


}
