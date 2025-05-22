<?php
// arreglo_sumas.php

// Crear el arreglo con 15 números aleatorios
$misNumeros = array();
for ($i = 0; $i < 15; $i++) {
    $misNumeros[$i] = rand(1, 100);
}

// Funciones de suma
function suma_total(array $numeros): int {
    $suma = 0;
    foreach ($numeros as $numero) {
        $suma += $numero;
    }
    return $suma;
}

function suma_pares(array $numeros): int {
    $suma = 0;
    for ($i = 0; $i < count($numeros); $i += 2) {
        $suma += $numeros[$i];
    }
    return $suma;
}

function suma_impares(array $numeros): int {
    $suma = 0;
    for ($i = 1; $i < count($numeros); $i += 2) {
        $suma += $numeros[$i];
    }
    return $suma;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Arreglo de Números</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 40px;
        }
        h1 {
            color: #333;
        }
        .resultado {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: fit-content;
        }
        .codigo {
            font-family: monospace;
            background-color: #eee;
            padding: 10px;
            border-radius: 5px;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>

    <h1>Resultado del Arreglo</h1>
    <div class="resultado">
        <p><strong>Arreglo generado:</strong></p>
        <div class="codigo"><?php echo implode(", ", $misNumeros); ?></div>

        <p><strong>Mostrado con print_r():</strong></p>
        <div class="codigo"><?php print_r($misNumeros); ?></div>

        <p><strong>Mostrado con foreach:</strong><br>
        <?php foreach ($misNumeros as $numero) { echo $numero . " "; } ?></p>

        <p><strong>Mostrado con for:</strong><br>
        <?php for ($i = 0; $i < count($misNumeros); $i++) { echo $misNumeros[$i] . " "; } ?></p>

        <p><strong>Suma total:</strong> <?php echo suma_total($misNumeros); ?></p>
        <p><strong>Suma en índices pares:</strong> <?php echo suma_pares($misNumeros); ?></p>
        <p><strong>Suma en índices impares:</strong> <?php echo suma_impares($misNumeros); ?></p>
    </div>

</body>
</html>
