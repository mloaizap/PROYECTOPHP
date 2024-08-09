<?php include("cabecera.php");?>

<?php  
  
  //Definir varialbles //
  $pvSandalia = "";
  $pvTenis = "";
  $pvMoca = "";
  $nombre = "";
  $cantidadsan = "";
  $cantidadTenis = "";
  $cantidadMoca = "";
  $totalSandalia = "";
  $totalTenis = "";
  $totalMoca = "";
  $totalFactura = "";
  $totalIva = "";
  $descuento = "";
  $totalNeto ="";
  $totalFacIva = "";

if (isset($_POST ['calcular_pv'])){
    $costosan = $_POST['costosan'];
    $costoTenis = $_POST['costoTenis'];
    $costoMoca = $_POST['costoMoca'];
    
    //Calculo del precio de venta 55% ganancia
    $pvSandalia = ($costosan * 0.55) + $costosan;
    $pvTenis = ($costoTenis * 0.55) + $costoTenis;
    $pvMoca = ($costoMoca * 0.55) + $costoMoca;

}

//formulario de pedidos
if (isset($_POST ['pedido'])) {
    $nombre = $_POST['nombre'];
    $cantidadsan = $_POST['cantidadsan'];
    $cantidadTenis = $_POST['cantidadTenis'];
    $cantidadMoca = $_POST['cantidadMoca'];
    $pvSandalia = $_POST['pvSandalia'];
    $pvTenis = $_POST['pvTenis'];
    $pvMoca = $_POST['pvMoca'];

$totalSandalia = $cantidadsan*$pvSandalia;
$totalTenis = $cantidadTenis*$pvTenis;
$totalMoca = $cantidadMoca*$pvMoca;

$totalFactura = $totalSandalia+$totalTenis+$totalMoca;
$totalIva = $totalFactura * 0.19; //iva de 19%
$totalFacIva = $totalFactura+$totalIva;
$descuento = $totalFacIva*0.08; //Descuento del 8%
$totalNeto = $totalFacIva - $descuento;

}

?>


<h1>EJERCICIO 4: CALCULO EDADES </h1> 

<p> <h4> Venta tres tipos de zapatos: sandalias, tenis y mocasines. Cada tipo de zapato lo adquiere a un costo distinto y para venderlos, ganancia del 55%. Cliente debe comprar de los tres tipos de zapatos y la cantidad que desee de cada uno de ellos. El cliente tiene derecho a un 8% de descuento sobre la compra que realiza. Crea un programa que muestre su nombre, el valor de la venta sin descuento, el descuento, valor de la venta con descuento y valor de la venta incluyendo IVA (venta neta final). </h4></p>
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col-md-4 column-divider">
    <p class="h3">Costos</p> <!--Formulario para ingresar el costo-->
    <form action ="" method="post">
        <label for=""> Sandalias: </label>
        <input type = "number" name = "costosan" id= "costosan"> <br> <br>

        <label for=""> Tenis </label>
        <input type = "number" name = "costoTenis" id= "costoTenis"> <br> <br>
        
        <label for=""> Mocasines </label>
        <input type = "number" name = "costoMoca" id= "costoMoca"> <br> <br>
        <input type = "submit" name = "calcular_pv" value = "CALCULAR PRECIO DE VENTA" class="btn btn-primary"><br> <br>  
    </form>
    </div>
    <div class="col-md-4 column-divider">
    <p class="h3">Realice su Pedido, diligencie su nombre y las cantidades:</p>
    <h5>Los Precios de venta son:</h2>
    <h6><?php if (isset($_POST['calcular_pv'])) { echo "Sandalias: $pvSandalia, Tenis: $pvTenis, Mocasines: $pvMoca"; } ?></h6><br>
     <br>
    <form action ="" method="post">
        <input type="hidden" name="pvSandalia" value="<?php echo $pvSandalia; ?>">
        <input type="hidden" name="pvTenis" value="<?php echo $pvTenis; ?>">
        <input type="hidden" name="pvMoca" value="<?php echo $pvMoca; ?>">
        <br>
        <label for="">Nombre cliente:</label> 
        <input type = "text" name = "nombre" id= "nombre"> <br> <br>

        <label for="">Sandalias</label> 
        <input type = "number" name = "cantidadsan" id= "cantidadsan"> <br> <br>

        <label for=""> Tenis: </label>
        <input type = "number" name = "cantidadTenis" id= "cantidadTenis"> <br> <br>
             
        <label for=""> Mocasines </label>
        <input type = "number" name = "cantidadMoca" id= "cantidadMoca"> <br> <br>
        <input type = "submit" name = "pedido" value = "CALCULAR FACTURA" class="btn btn-primary"><br> <br>  
    </form>
    </div>
    <div class="col-md-4 no-divider">
    <p class="h3">Factura</p> 
    <h5 class="text-start">NOMBRE CLIENTE: <?php if (isset($_POST['pedido'])){echo $nombre;}?></h5> <br>
    <div class = "row">
        <div class = "col-md-4 column-divider">
        <h5>Cantidad</h5>
        <h6> <?php if (isset($_POST['pedido'])){echo $cantidadsan;}?></h6>
        <h6> <?php if (isset($_POST['pedido'])){echo $cantidadTenis;}?></h6>
        <h6> <?php if (isset($_POST['pedido'])){echo $cantidadMoca;}?></h6>
    </div>
    <div class = "col-md-4 column-divider">
        <h5>Precio venta</h5>
        <h6> <?php if (isset($_POST['pedido'])){echo $pvSandalia;}?></h6>
        <h6> <?php if (isset($_POST['pedido'])){echo $pvTenis;}?></h6>
        <h6> <?php if (isset($_POST['pedido'])){echo $pvMoca;}?></h6>
    </div>
    <div class = "col-md-4 no-divider">
        <h5>Total</h5>
        <h6> <?php if (isset($_POST['pedido'])){echo $totalSandalia;}?></h2>
        <h6> <?php if (isset($_POST['pedido'])){echo $totalTenis;}?></h2>
        <h6> <?php if (isset($_POST['pedido'])){echo $totalMoca;}?></h2>
    </div>
    <br> 
    <div class = "container text.center">
    <h5 class="text-start">TOTAL FACTURA SIN IVA: <?php if(isset($_POST['pedido'])){echo $totalFactura;}?></h5> <br>
    <h5 class="text-start">IVA: <?php if (isset($_POST['pedido'])){echo $totalIva;}?></h5> <br>
    <h5 class="text-start">TOTAL FACTURA CON IVA: <?php if (isset($_POST['pedido'])){echo $totalFacIva;}?></h5> <br>
    <h5 class="text-start">DESCUENTO: <?php if (isset($_POST['pedido'])){echo $descuento;}?></h5> <br>
    <h5 class="text-start">TOTAL FACTURA NETA: <?php if (isset($_POST['pedido'])){echo $totalNeto;}?></h5> <br>
</div>
</div>
  </div>
</div>



<div>

</div>
<?php include("footer.php"); ?>
</body>
</html>
