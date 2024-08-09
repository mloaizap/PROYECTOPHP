<?php include("cabecera.php");?>

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
    
<?php include("footer.php"); ?>


</body>
</html>