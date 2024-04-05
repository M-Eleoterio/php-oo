<?php

class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    
    // CONSTRUCTOR, GETTERS E SETTERS
    
    public function __construct($desafiado, $desafiante, $rounds, $aprovada) {
        $this->desafiado = $desafiado;
        $this->desafiante = $desafiante;
        $this->rounds = $rounds;
        $this->aprovada = $aprovada;
    }

    
    public function getDesafiado() {
        return $this->desafiado;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }

    public function getRounds() {
        return $this->rounds;
    }

    public function getAprovada() {
        return $this->aprovada;
    }

    public function setDesafiado($desafiado): void {
        $this->desafiado = $desafiado;
    }

    public function setDesafiante($desafiante): void {
        $this->desafiante = $desafiante;
    }

    public function setRounds($rounds): void {
        $this->rounds = $rounds;
    }

    public function setAprovada($aprovada): void {
        $this->aprovada = $aprovada;
    }

    // METHODS
    
    public function marcarLuta() {
    
    }
    
    public function lutar() {
        
    }

}
