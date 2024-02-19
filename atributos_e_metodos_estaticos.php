<?php 

class Exemplo {
    public static $attr1 = "Atributo Estático";
    public $attr2 = "Atributo Comum";

    public static function metodo1() {
        echo "Método Estático";
    }
    public function metodo2() {
        echo "Método Comum";
    }
}

//$ex = new Exemplo();
echo Exemplo::$attr1;
echo "<br>";
echo Exemplo::metodo1();