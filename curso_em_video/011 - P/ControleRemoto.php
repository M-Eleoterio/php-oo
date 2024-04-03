<?php
require_once 'Controlador.php';
class ControleRemoto implements ControladorInterface
{
    private $volume;
    private $ligado;
    private $tocando;
    //GETTERS E SETTERS
    public function __construct() {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }
    public function getVolume()
    {
        return $this->volume;
    }
    public function getLigado()
    {
        return $this->ligado;
    }
    public function getTocando()
    {
        return $this->tocando;
    }

    public function setVolume($valor)
    {
        $this->volume = $valor;
    }
    public function setLigado($valor)
    {
        $this->ligado = $valor;
    }
    public function setTocando($valor)
    {
        $this->tocando = $valor;
    }

    //INTERFACE METHODS

    public function ligar()
    {
        $this->setLigado(true);
    }
    public function desligar()
    {
        $this->setLigado(false);
    }
    public function abrirMenu()
    {
        if ($this->ligado) {
            echo "Menu Aberto";
        } else {
            echo "Erro! TV desligada...";
        }
    }
    public function fecharMenu()
    {
        if ($this->ligado) {
            echo "Menu Fechado";
        } else {
            echo "Erro! TV desligada...";
        }
    }
    public function maisVolume()
    {
        if ($this->ligado) {

            $this->setVolume($this->getVolume() + 1);

            for ($i = 0; $i < $this->volume; $i++) {
                echo "|";
            }
        } else {
            echo "Erro! TV desligada...";
        }

    }
    public function menosVolume()
    {
        if ($this->ligado) {

            $this->setVolume($this->getVolume() - 1);

            for ($i = 0; $i < $this->volume; $i++) {
                echo "|";
            }
        } else {
            echo "Erro! TV desligada...";
        }
    }
    public function ligarMudo()
    {
        if ($this->ligado) {
            $this->setVolume(0);
        } else {
            echo "Erro! TV desligada...";
        }
    }
    public function desligarMudo()
    {
        if ($this->ligado) {
            $this->setVolume(50);
        } else {
            echo "Erro! TV desligada...";
        }
    }
    public function play()
    {
        if ($this->ligado) {
            $this->setTocando(true);
        } else {
            echo "Erro! TV desligada...";
        }
    }
    public function pause()
    {
        if ($this->ligado) {
            $this->setTocando(false);
        } else {
            echo "Erro! TV desligada...";
        }
    }
}
