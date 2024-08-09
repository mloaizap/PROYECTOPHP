<?php include("cabecera.php");?>

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
    
<?php include("footer.php"); ?>

</body>
</html>