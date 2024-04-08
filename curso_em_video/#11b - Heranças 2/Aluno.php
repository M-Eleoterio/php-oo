<?php
require "Pessoa.php";
class Aluno extends Pessoa {
    private $matricula;
    private $curso;
    
    public function pagarMensalidade() {
        
    }
    
    function getMatricula() {
        return $this->matricula;
    }

    function getCurso() {
        return $this->curso;
    }

    function setMatricula($matricula): void {
        $this->matricula = $matricula;
    }

    function setCurso($curso): void {
        $this->curso = $curso;
    }


}
