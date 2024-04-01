<?php 

    //modelo
    class Funcionario {

        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        //getters e setters (overloading) 
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this->$atributo;
        }
        /* function setNome($nome) {
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
        }  */       

        //metodos
        function resumirCadFunc() {
            //pegar atributos de objetos: $nomeObj->nomeAtributo. Se estiver chamando no proprio obj, utilize 'this' ao inves do nome do obj
            // return "$this->nome tem $this->numFilhos filho(s). Seu telefone é $this->telefone";
            return $this->__get("nome") . " Tem " . $this->__get("numFilhos") ." filho(s). Para contato, seu telefone é " . $this->__get("telefone") . "<br>" . "Trabalha como " . $this->__get("cargo") . " e recebe cerca de R$" . $this->__get("salario") . " por mês.";
        }

        function modificarNumFilhos($numFilhos) { 
            // afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }

    }

    //chamar objeto
    $y = new Funcionario();
    //utilizando os recem-criados getters e setters
    $y->__set("nome", "Claudio");
    $y->__set("numFilhos", 12);
    $y->__set("telefone", "11 12345-1234");
    $y->__set("cargo","Estilista");
    $y->__set("salario",5330);
    //printando
    echo $y->resumirCadFunc();
   /*  echo $y->__get("nome") . ' tem ' . $y->__get("numFilhos") . ' filho(s). Seu telefone é ' . $y->__get("telefone");
    echo "<br>";
    printf("%s trabalha como %s e recebe cerca de R$%.2f por mês", $y->__get("nome"), $y->__get("cargo"), $y->__get("salario")); */

    echo "<hr>";

    $x = new Funcionario();
    $x->__set("nome","Maria");
    $x->__set("numFilhos",1);
    $x->__set("telefone",'43 12345-1234');
    $x->__set("cargo","engenheira elétrica");
    $x->__set("salario",12000);

    echo $x->resumirCadFunc();

    /* echo $x->__get("nome") . ' tem ' . $x->__get("numFilhos") . ' filho(s). Seu telefone é ' . $x->__get("telefone");
    echo "<br>";
    printf("%s trabalha como %s e recebe cerca de R$%.2f por mês", $x->__get("nome"), $x->__get("cargo"), $x->__get("salario")); */
