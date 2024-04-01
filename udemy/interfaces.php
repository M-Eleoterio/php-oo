<?php

interface EquipamentoEletronicoInterface
{
    public function ligar();
    public function desligar();
}

class TV implements EquipamentoEletronicoInterface
{
    public function trocarCanal()
    {
        echo "Trocar Canal...";
    }
    public function ligar()
    {
        echo "ligar";
    }
    public function desligar()
    {
        echo "desligar";
    }
}

class Geladeira implements EquipamentoEletronicoInterface
{
    public function abrirPorta()
    {
        echo "Abrindo a porta...";
    }
    public function ligar()
    {
        echo "ligar";
    }
    public function desligar()
    {
        echo "desligar";
    }
};

//--------------------------------------

interface MamiferoInterface {
    public function respirar();
}
interface TerrestreInterface {
    public function andar();
}
interface AquaticoInterface {
    public function nadar();
}

class Humano implements MamiferoInterface, TerrestreInterface {
    public function respirar() {
        echo "respirando";
    }
    public function andar() {
        echo "andando";
    }

}

class Baleia implements MamiferoInterface, AquaticoInterface {
    public function respirar() {
        echo "respirando";
    }
    public function nadar() {
        echo "nadando";
    }
}