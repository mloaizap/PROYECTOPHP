<?php include("cabecera.php");?>

<?php
$figura = "";
$area = "";

if ($_POST) {
    $figura = $_POST['figura'] ?? '';

    switch ($figura) {
        case "Cuadrado":
            $lado = $_POST['lado'] ?? 0;
            $area = pow($lado, 2);
            break;
        case "Triangulo":
            $base = $_POST['base'] ?? 0;
            $altura = $_POST['altura'] ?? 0;
            $area = ($base * $altura) / 2;
            break;
        case "Rectangulo":
            $base = $_POST['base'] ?? 0;
            $altura = $_POST['altura'] ?? 0;
            $area = $base * $altura;
            break;
        default:
            echo "No aplica";
    }
}
?>

<h1>EJERCICIO 8: CALCULAR EL AREA DE UNA FIGURA</h1><br><br>

<div class="container text-center">
    <p>Realizar un programa que me permita solicitar una opción de área de alguna figura geométrica 3 figuras y me solicite los valores para la figura seleccionada. Como salida debe mostrarme el área de la figura. (Usar switch y case)</p>

    <h3>Calcular el área:</h3><br>

    <form action="" method="post">
        <label for="figura">Seleccione la figura:</label><br><br>
        <input type="radio" name="figura" value="Cuadrado" <?php echo $figura == "Cuadrado" ? "checked" : ""; ?>>Cuadrado<br>
        <input type="radio" name="figura" value="Triangulo" <?php echo $figura == "Triangulo" ? "checked" : ""; ?>>Triangulo<br>
        <input type="radio" name="figura" value="Rectangulo" <?php echo $figura == "Rectangulo" ? "checked" : ""; ?>>Rectangulo<br><br>

        <?php if ($figura == "Cuadrado"): ?>
            <label for="lado">Lado:</label>
            <input type="number" name="lado" id="lado" required><br><br>
        <?php elseif ($figura == "Triangulo"): ?>
            <label for="base">Base:</label>
            <input type="number" name="base" id="base" required><br><br>
            <label for="altura">Altura:</label>
            <input type="number" name="altura" id="altura" required><br><br>
        <?php elseif ($figura == "Rectangulo"): ?>
            <label for="base">Base:</label>
            <input type="number" name="base" id="base" required><br><br>
            <label for="altura">Altura:</label>
            <input type="number" name="altura" id="altura" required><br><br>
        <?php endif; ?>

        <input type="submit" value="CALCULAR" class="btn btn-primary"><br><br>
    </form>

    <?php if ($area !== ""): ?>
        <h2 class="text-center">El área del <?php echo $figura; ?> es <?php echo $area; ?></h2>
    <?php endif; ?>
</div>

<?php include("footer.php"); ?>
</body>
</html>
