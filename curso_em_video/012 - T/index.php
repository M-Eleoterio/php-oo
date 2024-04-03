<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once "Lutador.php";

        $l = new Lutador;
        $l->setNome("Pretty Boy");
        $l->setNacionalidade("Francês");
        $l->setIdade(31);
        $l->setAltura(1.75);
        $l->setPeso(68.9);
        $l->setCategoria("Leve");
        $l->setVitorias(11);
        $l->setDerrotas(2);
        $l->setEmpates(1);

        $l->apresentar();
        $l->status();
    ?>
</body>
</html>