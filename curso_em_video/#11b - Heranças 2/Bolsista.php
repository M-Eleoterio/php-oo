<?php
require "ALuno.php";
    
class Bolsista extends Aluno {
    private $bolsa;
   function renovarBolsa() {
   }
    
   function getBolsa() {
       return $this->bolsa;
   }

   function setBolsa($bolsa): void {
       $this->bolsa = $bolsa;
   }


}
