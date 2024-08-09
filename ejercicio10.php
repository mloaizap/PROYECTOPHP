<?php include("cabecera.php");?>

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

<?php include("footer.php"); ?>


</body>
</html>