<?php
class Conta
{
    //atr
    public $numConta;
    protected $tipo; # conta corrente - cc | conta poupança - cp
    private $dono;
    private $saldo;
    private $status; # ativo | inativo

    //meth
    public function __construct($t, $d)
    {
        $this->abrirConta($t, $d);
    }

    public function abrirConta($t, $d)
    {
        $this->status = true;
        $this->setDono($d);
        $this->numConta = uniqid();

        if ($t == "cc") {
            $this->setTipo($t);
            $this->setSaldo(50);
        } elseif ($t == "cp") {
            $this->setTipo($t);
            $this->setSaldo(150);
        } else {
            die("ERRO! Tipo de conta inválida");
        }
        $this->pagarMensal();
    }

    public function fecharConta()
    {
        if ($this->status) {
            if ($this->saldo > 0) {
                die("Erro! Ainda possui saldo na conta");
            } elseif ($this->saldo < 0) {
                die("Erro! $this->dono está devendo...");
            } else {
                $this->status = false;
            }
        } else {
            die("Erro! Conta já está fechada");
        }
    }

    public function pagarMensal()
    {
        if ($this->getTipo() == "cc") {
            $this->setSaldo(-12);
        } elseif ($this->getTipo() == "cp") {
            $this->setSaldo(-20);
        }
    }

    public function sacar($v)
    {
        if ($v > $this->getSaldo()) {
            die("Erro! Valor de saque maior que saldo");
        } elseif ($v < 0) {
            die("Erro! Valor de saque não permitido");
        } else {
            if ($this->status) {
                $this->setSaldo(-$v);
            } else {
                ("Erro! Conta fechada");
            }
        }
    }
    public function depositar($v)
    {
        if ($v < 0) {
            die("Erro! Valor de deposito não permitido");
        } elseif ($this->status) {
            $this->setSaldo($v);
        } else {
            die("Erro! Conta fechada");
        }
    }

    //getters
    public function getNumConta()
    {
        return $this->numConta;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function getDono()
    {
        return $this->dono;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function getStatus()
    {
        return $this->status;
    }

    //setters 

    public function setNumConta($n)
    {
        $this->numConta = $n;
    }
    public function setTipo($t)
    {
        $this->tipo = $t;
    }
    public function setDono($d)
    {
        $this->dono = $d;
    }
    public function setSaldo($s)
    {
        $this->saldo += $s;
    }
    public function setStatus($st)
    {
        $this->status = $st;
    }

}


/**
 * se conta for corrente, recebe R$50. Se poupança, R$150 ✅
 * pra fechar uma conta, não deve possuir mais ou menos que R$0 ✅
 * pra fazer um deposito ou sacar, a conta tem que estar aberta (status = 1)
 * pra sacar,tem que estar dentro do saldo da conta ✅
 * a mensalidade de uma conta corrente é R$12, enquanto o de poupança é R$20 ✅
 */