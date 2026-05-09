<?php
require_once("../CLASES/calculadora.php");

$calc = new Calculadora();
$resultado = "";
$historial = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["borrar"])) {
        $calc->borrarHistorial();
    } else {
        $a = floatval($_POST["a"]);
        $b = floatval($_POST["b"]);
        $op = $_POST["operacion"];
        $resultado = $calc->operar($a, $b, $op);
    }

    $historial = $calc->obtenerHistorial();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
<div class="contenedor">
<h2>Calculadora</h2>

<form method="POST">
    <input type="number" step="any" name="a" required>
    <input type="number" step="any" name="b" required>

    <select name="operacion">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicación</option>
        <option value="division">División</option>
        <option value="porcentaje">Porcentaje</option>
    </select>

    <button type="submit">Calcular</button>
    <button type="submit" name="borrar">Borrar Historial</button>
</form>

<?php if ($resultado !== ""): ?>
    <p>Resultado: <?= $resultado ?></p>
<?php endif; ?>

<?php if (!empty($historial)): ?>
    <h3>Historial</h3>
    <ul>
        <?php foreach ($historial as $h): ?>
            <li><?= $h ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

</div>
<a href="../Public/index.php" class="boton-volver">Volver al menú</a>

</body>
</html>