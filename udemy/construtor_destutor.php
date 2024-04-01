<?php

class Pessoa
{
    public $nome;

    //getter e setter
    function __get($atr)
    {
        return $this->$atr;
    }
    function __set($atr, $vlr)
    {
        $this->$atr = $vlr;
    }

    function __construct($nome)
    {
        $this->__set("nome", $nome);
        echo 'Objeto "Pessoa" iniciado como ' . $this->__get("nome") . '.';
    }

    function __destruct() {
        echo 'Objeto removido';
    }

    function correr()
    {
        return $this->__get("nome") . " está rodando!";
    }


}

$pessoa = new Pessoa('Jorge');
echo "<br>";
echo $pessoa->correr();

echo "<br>";
unset($pessoa); //desalocar propositalmente o objeto da memoria
