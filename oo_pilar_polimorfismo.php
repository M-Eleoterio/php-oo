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

    function trocarMarcha() {
        echo "Desengatar embreagem com a mão e engatar marcha com o pé";
    }
}

    class Caminhao extends Veiculo {}

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
    function trocarMarcha() {
        echo "Desengatar embreagem com o pé e engatar marcha com a mão";
    }
}

$carro = new Carro("ABC1234", "Branco");
$moto = new Moto("DEF1122", "Preta");
$caminhao = new Caminhao();

$carro->trocarMarcha();
echo "<br>";
$moto->trocarMarcha();
echo "<br>";
$caminhao->trocarMarcha();