<?php
require_once("../CLASES/binario.php");

$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST["numero"]);
    $obj = new Binario();
    $resultado = $obj->convertir($numero);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Binario</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <div class="contenedor">
        <h2>Convertir a Binario</h2>

        <form method="POST">
            <input type="number" name="numero" required>
            <button type="submit">Convertir</button>
        </form>

        <?php if ($resultado != ""): ?>
            <p>Resultado: <?= $resultado ?></p>
        <?php endif; ?>
    </div>
    <a href="../Public/index.php" class="boton-volver">Volver al menú</a>

</body>

</html>