<?php 

    //modelo
    class Funcionario {

        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        //getters e setters
        function setNome($nome) {
            $this->nome = $nome;
        }
        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }
        function setTelefone($telefone) {
            $this->telefone = $telefone;
        }
        

        function getNome() {
            return $this->nome;
        }
        function getNumFilhos() {
            return $this->numFilhos;
        }
        function getTelefone() {
            return $this->telefone;
        }        

        //metodos
        function resumirCadFunc() {
            //pegar atributos de objetos: $nomeObj->nomeAtributo. Se estiver chamando no proprio obj, utilize 'this' ao inves do nome do obj
            return "$this->nome tem $this->numFilhos filho(s). Seu telefone é $this->telefone";
        }

        function modificarNumFilhos($numFilhos) { 
            // afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }

    }

    //chamar objeto
    $y = new Funcionario();
    //utilizando os recem-criados getters e setters
    $y->setNome("Josué");
    $y->setNumFilhos(4);
    $y->setTelefone("11 99999-9999");
    //printando
    // echo $y->resumirCadFunc();
    echo $y->getNome() . ' tem ' . $y->getNumFilhos() . ' filho(s). Seu telefone é ' . $y->getTelefone();

    echo "<hr>";

    $x = new Funcionario();
    $x->setNome("Maria");
    $x->setNumFilhos(1);
    $x->setTelefone('43 12345-1234');

    echo $x->getNome() . ' tem ' . $x->getNumFilhos() . ' filho(s). Seu telefone é ' . $x->getTelefone();

