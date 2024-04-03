<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        require 'ControleRemoto.php';

        $c = new ControleRemoto;
        $c->ligar();
        echo $c->menosVolume();

    ?>
</body>
</html>