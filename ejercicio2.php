<?php include("cabecera.php");?>

<?php    


$numero = $_POST['numero'] ?? null;
$doble = $numero * 2;
$triple = $numero *3;

?>

<h1>EJERCICIO 2: CALCULAR EL DOBLE Y TRIPLE DE UN NÚMERO</h1> <br> 
<div class="container text-center">
<p><h2>Crear un algoritmo que muestre por pantalla el doble y el triple de un número ingresado por teclado.<h2></p>
<br> 
<div class="container text-center">
    <h3>Digite un número y podra visualizar el doble y triple de este.</h3><br>
    <form action="" method="post">
        <label for="">Digite un número:</label>
        <input type="number" name="numero" id="numero"><br><br>
        <input type="submit" value="CALCULAR" class="btn btn-primary"><br><br>
    </form>
</div>
</div>

<h2 class = "text-center"> <?php echo "El doble del número " . $numero . " ingresado es " . $doble . " y el triple es " . $triple?> </h2>

<?php include("footer.php"); ?>

</body>
</html>
