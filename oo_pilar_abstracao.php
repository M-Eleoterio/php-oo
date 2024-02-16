<?php 

    //modelo
    class Funcionario {

        //atributos
        public $nome = "José";
        public $telefone = "11 99999-9999";
        public $numFilhos = 2;

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
    //acessar objeto e utilizar sua função (-> serve pra acessar o obj)
    echo $y->resumirCadFunc() . "<br>";
    $y->modificarNumFilhos(3);
    echo $y->resumirCadFunc();

    echo "<hr>";

    $x = new Funcionario();
    echo $x->resumirCadFunc() . "<br>";
