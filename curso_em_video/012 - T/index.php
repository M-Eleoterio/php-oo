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
        
        $l = [];

        $l[0] = new Lutador("Pretty Boy", "Francês", 31, 1.75, 68.9, 11, 2, 1);

        $l[0]->apresentar();
        $l[0]->status();
        
        echo "<br>";
        
        $l[1] = new Lutador("Snapshadow", "Americano", 35, 1.65, 80.9, 12, 2, 1);

        $l[1]->apresentar();
        $l[1]->status();
        
        $l[2] = new Lutador("Putscript", "Brasileiro", 29, 1.68, 57.8, 14, 2, 3);
        
        $l[2]->apresentar();
        $l[2]->status();
        
        $l[3] = new Lutador("Dead Code", "Australiano", 28, 1.93, 81.6, 13, 0, 2);
        
        $l[3]->apresentar();
        $l[3]->status();
    ?>
</body>
</html>