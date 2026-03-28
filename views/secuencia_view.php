<?php require_once("../controllers/secuencia_controller.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fibonacci y Factorial</title>
    <link rel="stylesheet" href="../public/css/estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>Fibonacci y Factorial</h1>
        <p>Ingrese un número y seleccione una operación</p>
        <form method="POST">
            <input type="number" name="numero" placeholder="Ingrese un número" required>
            <select name="operacion" required>
                <option value="fibonacci">Fibonacci</option>
                <option value="factorial">Factorial</option>
            </select>
            <button type="submit">Calcular</button>
        </form>
        <?php if ($resultado !== "") { ?>
            <div class="resultado">
                <strong>Resultado:</strong><br>
                <?php
                if (is_array($resultado)) {
                    echo implode(" - ", $resultado);
                } else {
                    echo $resultado;
                }
                ?>
            </div>
        <?php } ?>
        <a class="volver" href="../index.php">Volver al menú</a>
    </div>
</body>
</html>