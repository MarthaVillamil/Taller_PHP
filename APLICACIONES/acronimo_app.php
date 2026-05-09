<?php
require_once("../CLASES/acronimo.php");

$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $frase = $_POST["frase"];
    $obj = new Acronimo();
    $resultado = $obj->convertir($frase);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Acrónimo</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <div class="contenedor">

<h2>Convertir Frase en Acrónimo</h2>

<form method="POST">
    <input type="text" name="frase" required>
    <button type="submit">Convertir</button>
</form>

<?php if ($resultado != ""): ?>
    <p>Resultado: <?= $resultado ?></p>
<?php endif; ?>
</div>

<a href="../Public/index.php" class="boton-volver">Volver al menú</a>

</body>
</html>