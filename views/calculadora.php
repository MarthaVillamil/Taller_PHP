<?php require_once("../controllers/calculadora_controller.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    <link rel="stylesheet" href="../public/css/estilos.css">
</head>
<body>

    <div class="contenedor">
        <h1>Calculadora</h1>
        <p>Ingrese dos números y seleccione una operación</p>

        <form method="POST">
            <input type="number" step="any" name="numero1" placeholder="Ingrese el primer número" value="" required>
            <input type="number" step="any" name="numero2" placeholder="Ingrese el segundo número" value="" required>

            <select name="operacion" required>
                <option value="sumar">Suma</option>
                <option value="restar">Resta</option>
                <option value="multiplicar">Multiplicación</option>
                <option value="dividir">División</option>
                <option value="porcentaje">Porcentaje</option>
            </select>

            <button type="submit">Calcular</button>
        </form>

        <?php if ($resultado !== "") { ?>
            <div class="resultado">
                <strong>Resultado:</strong> <?php echo $resultado; ?>
            </div>
        <?php } ?>

        <div class="resultado">
            <strong>Historial:</strong><br>
            <?php
            if (count($historial) > 0) {
                foreach ($historial as $operacionGuardada) {
                    echo $operacionGuardada . "<br>";
                }
            } else {
                echo "No hay operaciones guardadas";
            }
            ?>
        </div>

        <form method="POST">
            <button type="submit" name="borrar">Borrar historial</button>
        </form>

        <a class="volver" href="../index.php">Volver al menú</a>
    </div>

</body>
</html>