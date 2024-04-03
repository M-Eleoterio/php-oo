<?php

require "Controlador.php";
class Lutador implements LutadorInterface
{
    //ATR
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    //GETTERS E SETTERS
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    public function getVitorias()
    {
        return $this->vitorias;
    }

    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }

    public function getDerrotas()
    {
        return $this->derrotas;
    }

    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }

    public function getEmpates()
    {
        return $this->empates;
    }

    public function setEmpates($empates)
    {
        $this->empates = $empates;
    }


    public function apresentar()
    {
        echo "Pesando $this->peso KG, com $this->idade anos, $this->altura e tendo um cartel de $this->vitorias vitorias, $this->derrotas derrotas e $this->empates empates, vem aí o $this->nacionalidade... $this->nome!!!";
    }
    public function status()
    {
        echo "<br> -------STATUS------- <br>";
        echo "Nome: $this->nome <br>";
        echo "Nacionalidade: $this->nacionalidade <br>";
        echo "Idade: $this->idade <br>";
        echo "Altura: $this->altura <br>";
        echo "Peso: $this->peso KG <br>";
        echo "Categoria: $this->categoria <br>";
        echo "Vitórias: $this->vitorias <br>";
        echo "Derrotas: $this->derrotas <br>";
        echo "Empates: $this->empates <br>";
        echo "--------------------";
    }
    public function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta()
    {

    }
    public function empatarLuta()
    {

    }
}