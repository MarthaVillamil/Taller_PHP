<?php require_once("../controllers/estadistica_controller.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Promedio, Mediana y Moda</title>
    <link rel="stylesheet" href="../public/css/estilos.css">
</head>
<body>

    <div class="contenedor">
        <h1>Promedio, Mediana y Moda</h1>
        <p>Ingrese varios números separados por coma</p>

        <form method="POST">
            <input type="text" name="numeros" placeholder="Ejemplo: 2,4,4,6,8" value="" required>
            <button type="submit">Calcular</button>
        </form>
        <?php if ($promedio !== "") { ?>
            <div class="resultado">
                <strong>Promedio:</strong> <?php echo $promedio; ?><br>
                <strong>Mediana:</strong> <?php echo $mediana; ?><br>
                <strong>Moda:</strong> <?php echo implode(" - ", $moda); ?>
            </div>
        <?php } ?>
        <a class="volver" href="../index.php">Volver al menú</a>
    </div>

</body>
</html>