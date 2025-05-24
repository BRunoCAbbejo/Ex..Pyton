<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1></h1>
    <?php
    function Aguarde() {
        echo "Aguarde, Bom moço";    
    }

    function AreaT($Base, $Largura) {
     
        $AreaT = ($Base * $Largura);
        return $AreaT;
    }
    echo AreaT(20, 2);
    ?>
</body>
</html>