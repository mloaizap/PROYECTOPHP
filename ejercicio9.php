<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQ93EV1xPVkklhxNRu3b24z1a/P5z3coIGQinlOAy6/nFw1YZ6A7yQ/RyHpU/JrJ" crossorigin="anonymous"></script> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css"> 
    <title>Ejercicio 9</title>

</head>
<body>
<?php

If($_POST) {
$nombre = $_POST['nombre'];
$taller1 = $_POST['taller1'];
$taller2 = $_POST['taller2'];
$quiz = $_POST['quiz'];
$parcial = $_POST['parcial'];

//Definir variables
$sumTreinta = $taller1 + $taller2 + $quiz;
$treinta = $sumTreinta * 0.30;
$setenta = $parcial * 0.70;
$nota_definitiva = $treinta + $setenta;

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
                    <a class="nav-link active" aria-current="page" href="ejercicio9.php">Siguiente</a>
                </li>
                 </ul>
            </div>
        </div>
    </nav>



<h1>EJERCICIO 9: CALCULAR NOTA PRIMER PARCIAL </h1> <br><br>

<div class="container text-center">
<p> Escribir el algoritmo que permite calcular la nota correspondiente al primer parcial de “análisis” para un estudiante cualquiera. Se debe considerar que hay dos talleres y un quiz, que en conjunto valen un 30% de la nota y el resto (70%) corresponde a la nota del examen parcial.  
</p>


<h3>Digite las 3 notas</h3> <br>

<form action ="" method="post">
        <label for=""> Digite nombre del estudiante </label>
        <input type = "text" name = "nombre" id= "nombre"> <br> <br>
        <label for=""> Digite nota taller 1 </label>
        <input type = "number" name = "taller1" id= "taller1"> <br> <br>
        <label for=""> Digite nota taller 2 </label>
        <input type = "number" name = "taller2" id= "taller2"> <br> <br>
        <label for=""> Digite nota quiz </label>
        <input type = "number" name = "quiz" id= "quiz"> <br> <br>
        <label for=""> Digite nota parcial </label>
        <input type = "number" name = "parcial" id= "parcial"> <br> <br>
        <input type = "submit" value = "CALCULAR"><br> <br>
        
</form>


<h2 class="text-center"> <?php if ($_POST) {
    echo "Estudiante: " . $nombre . "<br>";
    echo "El 30% de los talleres es ". $treinta . " y el 70% del parcial es " . $setenta . "<br>";
    echo " La nota definitiva es " . $nota_definitiva;
}
    ?> 
</h2>

</div>
    


</body>
</html>