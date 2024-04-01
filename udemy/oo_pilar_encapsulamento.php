<?php

class Pai
{
    private $nome = 'Jorge';
    protected $sobrenome = "Silva";
    public $humor = "Feliz";

    /*  public function __set($arg, $value)
     {
        if (strlen($value) >= 3) {
            $this->$arg = $value;
        }
     }
     public function __get($arg)
     {
         return $this->$arg;
     } */

    private function executarManias()
    {
        echo "Assoviar";
    }
    protected function responder()
    {
        echo "Olá!";
    }
    public function executarAcao()
    {
        $x = rand(1, 10);

        if ($x >= 1 && $x <=8) {
            $this->responder();
        } else {
            $this->executarManias();
        }
    }

}

/* $pai = new Pai();
$pai->executarAcao();

echo $pai->nome;
$pai->nome = "Marcio";
echo "<br>";
echo $pai->nome; */
/* echo $pai->humor;
 $pai->humor = "Triste";
echo "<br>";
echo $pai->humor; */

class Filho extends Pai
{
    /* private $nome;
    private $idade;

    private function executarMania()
    {
        #...
    } */
}

$filho = new Filho();
echo "<pre>";
print_r($filho);
echo "</pre>";
