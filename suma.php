<h3>EJERCICIO VENTA</h3>
<?php
$cliente = "PEPITO";
$producto = "ATUN LOMITOS";
$canti = 5;
$precio = 7;
$reg="";
$subTot = $canti * $precio;
$iva = $subTot * 0.12;
if ($subTot <= 50) {
  $desc = $subTot * 0.05;
  $reg="Cuaderno";
} else {
  if ($subTot > 50 && $subTot  <= 100) {
    $desc = $subTot * 0.07;
    $reg="Lonchera";
  } else {
    if ($subTot > 100 && $subTot <= 200) {
      $desc = $subTot * 0.10;
      $reg="Pelota";
    } else {
      if ($subTot > 200) {
        $desc = $subTot * 0.15;
        $reg="Mochila";
      }
    }
  }
}

$totPagar = $subTot + $iva - $desc;
?>
<label><br>***RESULTADOS***</br></label>
<label>Cliente: </label> <?php echo $cliente; ?>
<br><label>Producto: </label> <?php echo $producto; ?> </br>
<label>Cantidad: </label> <?php echo $canti; ?> 
<br><label>Precio: </label> <?php echo $precio; ?> </br> 
<label>Descuento: </label> <?php echo $desc; ?> 
<br> <label>Regalo: </label> <?php echo $reg; ?> </br> 