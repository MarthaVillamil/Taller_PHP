<?php
require_once("../CLASES/conjuntos.php");

$union = $inter = $difAB = $difBA = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = array_map('intval', explode(",", $_POST["a"]));
    $b = array_map('intval', explode(",", $_POST["b"]));

    $obj = new Conjuntos();

    $union = $obj->union($a, $b);
    $inter = $obj->interseccion($a, $b);
    $difAB = $obj->diferenciaAB($a, $b);
    $difBA = $obj->diferenciaBA($a, $b);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Conjuntos</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <div class="contenedor">

        <h2>Operaciones con Conjuntos</h2>

        <form method="POST">
            <input type="text" name="a" placeholder="Conjunto A: 1,2,3" required>
            <input type="text" name="b" placeholder="Conjunto B: 2,3,4" required>
            <button type="submit">Calcular</button>
        </form>

        <?php if (!empty($union)): ?>
            <p>Unión: <?= implode(", ", $union) ?></p>
            <p>Intersección: <?= implode(", ", $inter) ?></p>
            <p>A - B: <?= implode(", ", $difAB) ?></p>
            <p>B - A: <?= implode(", ", $difBA) ?></p>
        <?php endif; ?>
    </div>

    <a href="../Public/index.php" class="boton-volver">Volver al menú</a>

</body>

</html>