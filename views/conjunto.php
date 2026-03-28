<?php require_once("../controllers/conjunto_controller.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Operaciones con Conjuntos</title>
    <link rel="stylesheet" href="../public/css/estilos.css">
</head>
<body>

    <div class="contenedor">
        <h1>Operaciones con Conjuntos</h1>
        <p>Ingrese dos conjuntos de números enteros separados por coma</p>

        <form method="POST">
            <input type="text" name="conjunto_a" placeholder="Conjunto A. Ejemplo: 1,2,3,4" value="" required>
            <input type="text" name="conjunto_b" placeholder="Conjunto B. Ejemplo: 3,4,5,6" value="" required>
            <button type="submit">Calcular</button>
        </form>

        <?php if (count($union) > 0 || count($interseccion) > 0 || count($diferenciaAB) > 0 || count($diferenciaBA) > 0) { ?>
            <div class="resultado">
                <strong>Unión:</strong> <?php echo implode(" - ", $union); ?><br>
                <strong>Intersección:</strong> <?php echo implode(" - ", $interseccion); ?><br>
                <strong>Diferencia A-B:</strong> <?php echo implode(" - ", $diferenciaAB); ?><br>
                <strong>Diferencia B-A:</strong> <?php echo implode(" - ", $diferenciaBA); ?>
            </div>
        <?php } ?>

        <a class="volver" href="../index.php">Volver al menú</a>
    </div>

</body>
</html>