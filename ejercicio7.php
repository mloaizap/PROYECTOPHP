<?php include("cabecera.php");?>

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

<?php include("footer.php"); ?>

</body>
</html>
