<?php require_once("../controllers/acronimo_controller.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acrónimo</title>
    <link rel="stylesheet" href="../public/css/estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>Generador de Acrónimo</h1>
        <p>Ingrese un nombre largo</p>
        <form method="POST">
            <input type="text" name="texto" placeholder="Ingrese un nombre largo" required>
            <br>
            <button type="submit">Generar</button>
        </form>
        <?php if ($resultado != "") { ?>
            <div class="resultado">
                <strong>Resultado:</strong> <?php echo $resultado; ?>
            </div>
        <?php } ?>
        <a class="volver" href="../index.php">Volver al menú</a>
    </div>
</body>
</html>