<?php include("cabecera.php");?>

<?php

If($_POST) {
$A = $_POST['A'];
$B = $_POST['B'];
$C = $_POST['C'];

//Definir variables
$mayor = "";
$menor = "";
$igual = "";

//Validar si hay números repetidos
If($A ==$B || $A == $C || $B == $C) {
    $igual = "Ingresar otro número, número repetido";
} else {
    //Determinar el número mayor
if (($A > $B) and ($A > $C)) {
$mayor = "A es el mayor";
} elseif (($B > $A && $B > $C)) {
$mayor = "B es el mayor";
 } else {
$mayor = "C es el mayor";
}

 // Determinar el número menor

    If(($A < $B && $A < $C)) {
    $menor = "A es el menor";
    } elseif (($B < $A && $B < $C)) {
    $menor = "B es el menor";
     } else {
    $menor = "C es el menor";
    }
} 
}

?>



<h1>EJERCICIO 5: IDENTIFICAR CUAL ES EL NÚMERO MAYOR Y EL NÚMERO MENOR </h1> <br>

<div class="container text-center">
<p> Desarrolle un algoritmo que permita leer tres valores y almacenarlos en las variables A, B y C respectivamente. El algoritmo debe imprimir cual es el mayor y cual es el menor. Recuerde constatar que los tres valores introducidos por el teclado sean valores distintos. Presente un mensaje de alerta en caso de que se detecte la introducción de valores iguales.  
</p>
<br>

<h3>Digite 3 números almacenados en A, B y C</h3>
<br>
<form action ="" method="post">
        <label for=""> Digite número A </label>
        <input type = "number" name = "A" id= "A"> <br> <br>
        <label for=""> Digite número B </label>
        <input type = "number" name = "B" id= "B"> <br> <br>
        <label for=""> Digite número C </label>
        <input type = "number" name = "C" id= "C"> <br> <br>
        <input type = "submit" value = "CALCULAR" class="btn btn-primary"><br> <br>
        
</form>


<h2 class = "text-center">
        <?php 
        if ($_POST) {
            echo $mayor . " y " . $menor;
        }
        ?>
</h2>


<h2 class = "text-center"> 
    <?php if ($_POST) {
    echo $igual;
  }

    ?> 
</h2>

</div>
    
<?php include("footer.php"); ?>

</body>
</html>