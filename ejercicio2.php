<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css"> 
    <title>Ejercicio 2</title>

</head>
<body>

<?php    


$numero = $_POST['numero'] ?? null;
$doble = $numero * 2;
$triple = $numero *3;

?>

<!-- Menú -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">EJERCICIOS PRACTICOS EN PHP </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="ejercicio3.php">Siguiente</a>
                </li>
                 </ul>
            </div>
        </div>
    </nav>

<h1>EJERCICIO 2: CALCULAR EL DOBLE Y TRIPLE DE UN NÚMERO</h1> <br> 
<div class="container text-center">
<p><h2>Crear un algoritmo que muestre por pantalla el doble y el triple de un número ingresado por teclado.<h2></p>
<br> 
<div class="container text-center">
    <h3>Digite un número y podra visualizar el doble y triple de este.</h3><br>
    <form action="" method="post">
        <label for="">Digite un número:</label>
        <input type="number" name="numero" id="numero"><br><br>
        <input type="submit" value="CALCULAR" class="btn btn-primary"><br><br>
    </form>
</div>
</div>

<h2 class = "text-center"> <?php echo "El doble del número " . $numero . " ingresado es " . $doble . " y el triple es " . $triple?> </h2>



</body>
</html>
