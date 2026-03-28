<?php require_once("../controllers/binario_controller.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversión Binaria</title>
    <link rel="stylesheet" href="../public/css/estilos.css">
</head>
<body>

    <div class="contenedor">
        <h1>Conversión Binaria</h1>
        <p>Ingrese un número entero para convertirlo a binario</p>

        <form method="POST">
            <input type="number" name="numero" placeholder="Ingrese un número entero" value="" required>
            <button type="submit">Convertir</button>
        </form>

        <?php if ($resultado !== "") { ?>
            <div class="resultado">
                <strong>Resultado:</strong> <?php echo $resultado; ?>
            </div>
        <?php } ?>

        <a class="volver" href="../index.php">Volver al menú</a>
    </div>

</body>
</html>