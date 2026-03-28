<?php require_once("../controllers/arbol_controller.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Árbol Binario</title>
    <link rel="stylesheet" href="../public/css/estilos.css">
</head>
<body>

    <div class="contenedor">
        <h1>Árbol Binario</h1>
        <p>Ingrese preorden e inorden separados por comas</p>

        <form method="POST">
            <input type="text" name="preorden" placeholder="Preorden: A,B,D,E,C" value="" required>
            <input type="text" name="inorden" placeholder="Inorden: D,B,E,A,C" value="" required>
            <button type="submit">Construir</button>
        </form>

        <?php if ($resultado != "") { ?>
            <div class="resultado">
                <strong>Árbol construido:</strong><br>
                <?php echo $resultado; ?>
            </div>
        <?php } ?>

        <a class="volver" href="../index.php">Volver al menú</a>
    </div>

</body>
</html>