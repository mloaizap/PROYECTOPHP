<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css"> 
    <title>Ejercicio 7</title>

</head>
<body>

<?php    

//Declarar variables
$numHoraTraba = "";
$totalNomina = "";
$valorHora = 30000;
$id = "";

$id = $_POST['id'] ?? null;
$numHoraTraba = $_POST['numHoraTraba'] ?? null;

if ($id !== null && $numHoraTraba !== null) {
    if ($id < 1 || $id > 50) {
        echo "<div class='alert alert-danger'>El ID no está dentro del rango permitido (1-50).</div>";
    } else {
        $totalNomina = $numHoraTraba * $valorHora;
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
                    <a class="nav-link active" aria-current="page" href="ejercicio8.php">Siguiente</a>
                </li>
                 </ul>
            </div>
        </div>
    </nav>

<h1>EJERCICIO 7: NOMINA CONSTRUCTORA TECNOVIVIR CASAS</h1> <br> 
<div class="container text-center">
<p><h2> Desarrolle un algoritmo para la empresa Constructora Tecnovivir Casas C.A., que le permita calcular e imprimir la nómina para su cancelación a un total de 50 obreros calificados a quienes debe cancelar por horas trabajadas. La hora trabajada se pautó en 30.000 Bolívares. <h2></p>
<br> 
<div class="container text-center">
    <h3>NOMINA Coloca el id del empleado de 1 a 50 .</h3><br>
    <form action="" method="post">
        <label for="">id:</label>
        <input type="number" name="id" id="id"><br><br>
        <label for="">Total horas:</label>
        <input type="number" name="numHoraTraba" id="numHoraTraba"><br><br>
        <input type="submit" value="CALCULAR" class="btn btn-primary"><br><br>
        
    </form>
</div>
</div>

<h2 class = "text-center"> <?php echo "salario es " . $totalNomina . " Bolivares";?> </h2>



</body>
</html>
