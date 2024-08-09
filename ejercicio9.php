<?php include("cabecera.php");?>

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
    
<?php include("footer.php"); ?>

</body>
</html>