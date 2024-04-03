<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php 
        require_once 'Conta.php';
        $c1 = new Conta("cc", "Maria");
        $c1->setSaldo(-38);
        $c1->fecharConta();
    ?>
    <pre>
        <?= print_r($c1) ?>
    </pre>
</body>
</html>