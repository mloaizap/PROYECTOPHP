<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQ93EV1xPVkklhxNRu3b24z1a/P5z3coIGQinlOAy6/nFw1YZ6A7yQ/RyHpU/JrJ" crossorigin="anonymous"></script> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css"> 
    <title>Ejercicio 8</title>
</head>
<body>
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

<!-- Menú -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">EJERCICIOS PRACTICOS EN PHP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="ejercicio9.php">Siguiente</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

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
</body>
</html>
