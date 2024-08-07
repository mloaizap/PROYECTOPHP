<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQ93EV1xPVkklhxNRu3b24z1a/P5z3coIGQinlOAy6/nFw1YZ6A7yQ/RyHpU/JrJ" crossorigin="anonymous"></script> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css"> 
    <title>Ejercicio 3</title>

</head>
<body>
<?php

If($_POST) {
$nota = $_POST['nota'];
If(($nota>=1) and ($nota<=  9)) {
$mensaje = "E";
} elseif (($nota >= 10) and ($nota <= 12)) {
$mensaje = "D";
} elseif (($nota >= 13) and ($nota <= 15)) {
$mensaje = "C";
} elseif (($nota >= 16) and ($nota <= 18)) {
    $mensaje = "B";
    }  elseif (($nota >= 19) and ($nota <= 20)) {
        $mensaje = "A";
        } else
$mensaje = "Número errado, fuera de rango";
}

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
                    <a class="nav-link active" aria-current="page" href="ejercicio4.php">Siguiente</a>
                </li>
                 </ul>
            </div>
        </div>
    </nav>


<h1>EJERCICIO 3: CONVERTIR CALIFICACIONES NÚMERICAS </h1> <br>
<div class="container text-center">
<p> Desarrolle un algoritmo que permita convertir calificaciones numéricas, según la siguiente tabla: <br><br>
A = 19 y 20 <br><br> B =16, 17 y 18 <br><br> C = 13, 14 y 15 <br><br> D = 10, 11 y 12 <br> <br>
</p>

</div>

<div class="container text-center">
<h3 class = "text-center">Digite Una calificación entre 1 y 20 </h3> <br>

<form action ="" method="post">
        <label for=""> Digite un número: </label>
        <input type = "number" name = "nota" id= "nota"> <br> <br>
        <input type = "submit" value = "CALCULAR" class="btn btn-primary"><br> <br>
        
</form>

<div class = "container text-center">
<h2 class = "text-center"> <?php if ($_POST) {
    echo "La calificación es " . $mensaje;
}
    ?> 
</h2>

</div>

</div>
    


</body>
</html>