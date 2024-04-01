<?php

class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar() {

    }
    function tampar() {
        $this->tampada = true;
    }
    function destampar() {
        $this->tampada = false;
    }

}