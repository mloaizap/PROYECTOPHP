<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQ93EV1xPVkklhxNRu3b24z1a/P5z3coIGQinlOAy6/nFw1YZ6A7yQ/RyHpU/JrJ" crossorigin="anonymous"></script> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css"> 
    <title>Ejercicio 10</title>

</head>
<body>
<?php

//Definir variables
$numero = "";
$resultados = "";

if ($_POST) {
    $numero = $_POST['numero'];
    if ($numero && $numero >= 1 && $numero <= 10) {
        $resultados = "";
        for ($i = 1; $i <= 10; $i++) { 
            $total = $i * $numero;
            $resultados .= "<li>$numero x $i = $total</li>";
        }
        $resultados .= "";
    } else {
        $resultados = "Por favor, ingrese un número entre 1 y 10.";
    }
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
                    <a class="nav-link active" aria-current="page" href="ejercicio9.php">Anterior</a>
                </li>
                 </ul>
            </div>
        </div>
    </nav>


<h1>EJERCICIO 10: TABLA DE MULTIPLICAR </h1> <br>

<div class="container text-center">
<p><h2>Realizar un algoritmo que muestre por pantalla la tabla de multiplicar de cualquier número, ingresado entre el 1 y el 10. (for)
</h2>
</p>

<h4>Digite el número de la tabla de multiplicar que desee consultar</h4> 
<br>
<form action ="" method="post">
        <label for=""> Numero:</label>
        <input type = "text" name = "numero" id= "numero"> <br> <br>
        <input type = "submit" value = "CALCULAR" class = "btn btn-primary"><br> 
        
</form>
<br>

</div>

<h3 class = "text-center">
<?php 

        if ($_POST) {
            echo $resultados;
        }
 ?>
</h3>

</body>
</html>