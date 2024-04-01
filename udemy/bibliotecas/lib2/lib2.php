<?php

namespace B;

class Cliente implements CadastroInterface
{

    public function __construct()
    {
        echo "<pre>";
        print_r(get_class_methods($this));
        echo "</pre>";
    }
    public $nome = "Jamilton";
    public function __get($attr)
    {
        return $this->$attr;
    }
    public function remover()
    {
        echo "Remover";
    }
}

interface CadastroInterface {
    public function remover();
} 