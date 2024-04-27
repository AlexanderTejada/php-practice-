<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>obtener promedio</title>
</head>
<body>
    <h1>Promedio</h1>
    <p> A continuacion se muestra el promedio de cuanto pagaron los 3 clientes </p>
    <?php
    $clienteA= 100;
    $clienteB= 80;
    $CLIENTEc= 45;

    echo "pago de clientes: " . $clienteA . "<br>" . $clienteB . "<br>" . $CLIENTEc . "<br>";



    $promecio = ($clienteA + $clienteB + $CLIENTEc) / 3;

    echo "El promedio total de lo que pagaron los clientes es: " . $promecio;
    ?>
</body>
</html>
