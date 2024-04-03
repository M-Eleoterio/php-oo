<?php

class Caneta {
    public $modelo;
    public $cor;
    private $ponta;

    public function __construct($cor, $modelo){
        $this->cor = $cor;
        $this->modelo = $modelo;
    }

    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getPonta() {
        return $this->ponta;
    }
    public function setPonta($ponta) {
        $this->ponta = $ponta;
    }

}