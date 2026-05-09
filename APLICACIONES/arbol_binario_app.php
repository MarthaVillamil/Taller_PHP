<?php
require_once("../CLASES/arbol_binario.php");

$resultadoPost = "";
$estructura = "";
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // LIMPIEZA
    $pre = array_map(function ($v) {
        return strtoupper(trim($v));
    }, explode(",", $_POST['preorden']));

    $in = array_map(function ($v) {
        return strtoupper(trim($v));
    }, explode(",", $_POST['inorden']));

    // VALIDACIONES
    if (count($pre) != count($in)) {
        $mensaje = "Deben tener la misma cantidad de elementos.";
    } elseif (array_diff($pre, $in) || array_diff($in, $pre)) {
        $mensaje = "Deben contener los mismos elementos.";
    } else {

        $arbol = new ArbolBinario();
        $raiz = $arbol->construir($pre, $in);

        if ($raiz != null) {

            $post = $arbol->recorridoPostorden($raiz);
            $resultadoPost = implode(", ", $post);

            $estructura = $arbol->mostrarEstructura($raiz);

        } else {
            $mensaje = "No se pudo construir el árbol.";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Árbol Binario</title>

    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <div class="contenedor">

        <h2>Árbol Binario</h2>

        <form method="POST">
            <input type="text" name="preorden" placeholder="A,S,D" required>
            <input type="text" name="inorden" placeholder="D,A,S" required>
            <button type="submit">Construir</button>
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>

            <?php if ($mensaje != ""): ?>
                <p class="error"><?= $mensaje ?></p>
            <?php else: ?>

                <h3>Postorden</h3>
                <div class="resultado-arbol">
                    <?= $resultadoPost ?>
                </div>

                <h3>Estructura</h3>
                <div class="resultado-arbol">
                    <?= $estructura ?>
                </div>

            <?php endif; ?>

        <?php endif; ?>

    </div>
    <a href="../Public/index.php" class="boton-volver"> Volver al menú</a>
</body>

</html>