<?php include("cabecera.php");?>

<?php

If($_POST) {
$A = $_POST['A'];
$B = $_POST['B'];
$C = $_POST['C'];

//Definir variables
$menor = "";

  // Determinar el número menor

    If(($A < $B && $A < $C)) {
    $menor = "A es el menor";
    } elseif (($B < $A && $B < $C)) {
    $menor = "B es el menor";
     } else {
    $menor = "C es el menor";
    }
} 


?>


<h1>EJERCICIO 6: IDENTIFICAR CUAL ES EL NÚMERO MENOR </h1> <br><br>

<div class="container text-center">
<p> Desarrolle un algoritmo que permita leer tres valores y almacenarlos en las variables A, B, y C  respectivamente. El algoritmo debe indicar cual es el menor. Asumiendo que los tres valores  introducidos por el teclado son valores distintos.   
</p>

<div class="container text-center">
<h3>Digite 3 números almacenados en A, B y C</h3>
<br>
<form action ="" method="post">
        <label for=""> Digite número A </label>
        <input type = "number" name = "A" id= "A"> <br> <br>
        <label for=""> Digite número B </label>
        <input type = "number" name = "B" id= "B"> <br> <br>
        <label for=""> Digite número C </label>
        <input type = "number" name = "C" id= "C"> <br> <br>
        <input type = "submit" value = "CALCULAR" class = "btn btn-primary"><br> <br>
        
</form>


<h2 class = "text-center">
        <?php 
        if ($_POST) {
            echo  $menor;
        }
        ?>
</h2>

</div>

</div>
    
<?php include("footer.php"); ?>

</body>
</html>