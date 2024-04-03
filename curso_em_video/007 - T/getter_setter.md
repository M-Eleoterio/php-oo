### METODOS ESPECIAIS
## Métodos Getter
Até agora, para coletar uma info dentro de um objeto, foi ensinado assim:

```php
$o = new Objeto;
echo $o->atributo;
```

mas o correto é se utilizar de um agente interceptador para garantir a segurança do objeto, como um caixa de um supermercado.
então se utiliza dos métodos get:

```php
$o = new Objeto;
echo $o->getAtributo(); //pega o atributo e devolve ao user
```
```php
//dentro da classe
public function getAtributo() {
    return $this->atributo;
}
```
O mesmo se aplica para os métodos Setters.

## Métodos Setter
Ao invés de dar acesso direto ao usuário modificar algo:

```php
$o = new Objeto;
$o->atributo = "valor";
```

utilizamos do método setter:
```php
$o = new Objeto;
$o->setAtributo("valor");
```
```php
//dentro da classe
public funciton setAtributo($valor) {
    $this->atributo = $valor;
}
```

isso garante uma maior segurança.

## Método Construtor
Uma maneira de realizar operações padrões automáticas no momento em que uma classe for invocada:

```php
class Objeto {
    private function __construct() {
        $this->setAtributo("valor");
        $this->getAtributo();
        $this->setAtributo2("outro valor");
    }
    #...
}
```

assim, ele já irá iniciar com Atributo e Atributo2 contendo valores, além de mostrar o primeiro atributo.

Como qualquer outra função/método, ela pode receber parâmetros:

```php
class Objeto {
    private function __construct($a1, $a2) {
        $this->setAtributo($a1);
        $this->getAtributo();
        $this->setAtributo2($a2);
    }
    #...
}
```
```php
$o = new Objeto("valor", "outro valor");
```