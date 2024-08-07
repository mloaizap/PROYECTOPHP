<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQ93EV1xPVkklhxNRu3b24z1a/P5z3coIGQinlOAy6/nFw1YZ6A7yQ/RyHpU/JrJ" crossorigin="anonymous"></script> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css"> 
   
</head>
<body>

<?php  
  
if($_POST) {
    $edad1 = $_POST['edad1'];
    $edad2 = $_POST['edad2'];

    if ($edad1 > $edad2) {
        $mayor = $edad1;
        $menor = $edad2;
    } else {
    $mayor = $edad2;
    $menor = $edad1;
}

$calcular = $mayor - $menor;

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
                    <a class="nav-link active" aria-current="page" href="ejercicio2.php">Siguiente</a>
                </li>
                 </ul>
            </div>
        </div>
    </nav>



<h1>EJERCICIO 1: CALCULO EDADES </h1> 

<p> <h2> Elabora un algoritmo que solicite la edad de 2 hermanos y muestre un mensaje indicando la edad del mayor y cuantos años de diferencia tiene con el menor.</h2></p>

<div>
<h3 class="text-center">Digite las edades de los hermanos </h3>
<br> <br>
<div class="d-flex justify-content-center">
<form action ="" method="post">
<div class="container text-center">
        <label for=""> Digite la primer edad: </label>
        <input type = "number" name = "edad1" id= "edad1"> <br> <br>

        <label for=""> Digite la segunda edad: </label>
        <input type = "number" name = "edad2" id= "edad2"> <br> <br>
        <input type = "submit" value = "CALCULAR" class="btn btn-primary"><br> <br>
    
   
</div>
</form>
</div>

<h2>
    <?php 
    if ($_POST) {
        echo "El hermano mayor tiene " . $mayor . " años " . " y la diferencia de edad es " . $calcular . " años"; 
    }
    ?>
</h2>

</div>
    


</body>
</html>