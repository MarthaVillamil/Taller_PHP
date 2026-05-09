<?php
require_once("../CLASES/calculos_estadisticos.php");

$promedio = $mediana = "";
$moda = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numeros = explode(",", $_POST["numeros"]);

    $numeros = array_map('trim', $numeros);

    $numeros = array_filter($numeros, function ($v) {
        return is_numeric($v);
    });

    $numeros = array_map('floatval', $numeros);
    $est = new CalculosEstadisticos();

    $promedio = $est->promedio($numeros);
    $mediana = $est->mediana($numeros);
    $moda = $est->moda($numeros);
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Estadística</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>


    <div class="contenedor">

        <h2>Promedio - Mediana - Moda</h2>

        <form method="POST">
            <input type="text" name="numeros" placeholder="Ej: 1,2,3,4,4" required>
            <button type="submit">Calcular</button>
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>

            <div class="resultado-arbol">
                <p><b>Promedio:</b> <?= $promedio ?></p>
                <p><b>Mediana:</b> <?= $mediana ?></p>
                <p><b>Moda:</b>
                    <?php
                    if (is_string($moda)) {
                        echo $moda;
                    } elseif (is_array($moda)) {
                        echo empty($moda) ? "No hay datos" : implode(", ", $moda);
                    } else {
                        echo "Error en los datos";
                    }
                    ?>
                </p>
            </div>

        <?php endif; ?>

    </div>

    <a href="../Public/index.php" class="boton-volver"> Volver</a>

</body>

</html>