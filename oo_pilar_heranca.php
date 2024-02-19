<?php

class Carro extends Veiculo
{
    public $teto_solar = true;

    function __construct($placa, $cor)
    {
        $this->placa = $placa;
        $this->cor = $cor;
    }

    function abrirTetoSolar()
    {
        echo "Abrindo teto solar...";
    }
    function alterarPosicaoVolante()
    {
        echo "Alterando posição do volante...";
    }
}

class Moto extends Veiculo
{
    public $contra_peso_guidao = true;

    function __construct($placa, $cor)
    {
        $this->placa = $placa;
        $this->cor = $cor;
    }


    function empinar()
    {
        echo "Empinando...";
    }
}

class Veiculo
{
    public $placa;
    public $cor;

    function acelerar()
    {
        echo "Acelerando...";
    }

    function freiar() {
        echo "Freiando...";
    }
}

$carro = new Carro("ABC1234", "Branco");
$moto = new Moto("DEF1122", "Preta");

echo '<pre>';
print_r($carro);
print_r($moto);
echo '</pre>';

echo "<hr>";
$carro->abrirTetoSolar();
echo "<br>";
$carro->acelerar();
echo "<br>";
$carro->freiar();

echo "<hr>";
$moto->empinar();
echo "<br>";
$moto->acelerar();
echo "<br>";
$moto->freiar();
