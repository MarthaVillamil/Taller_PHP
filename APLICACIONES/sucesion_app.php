<?php
require_once("../CLASES/sucesión.php");
$resultado = [];
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero = intval($_POST["numero"]);
    $tipo = $_POST["tipo"];

    $serie = new Sucesion();

    if ($tipo == "fibonacci") {
        $resultado = $serie->fibonacci($numero);
    } else {
        $resultado = $serie->factorial($numero);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Sucesion</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <div class="contenedor">
        <h2>Fibonacci o Factorial</h2>

        <form method="POST">
            <input type="number" name="numero" required>

            <select name="tipo">
                <option value="fibonacci">Fibonacci</option>
                <option value="factorial">Factorial</option>
            </select>

            <button type="submit">Calcular</button>
        </form>

        <?php if (!empty($resultado)): ?>
            <div class="resultado">
                <?php foreach ($resultado as $valor): ?>
                    <div class="caja-resultado">
                        <?= $valor ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <?php if ($mensaje != ""): ?>
            <p class="error"><?= $mensaje ?></p>
        <?php endif; ?>
    </div>
    <a href="../Public/index.php" class="boton-volver">Volver al menú</a>

</body>

</html>