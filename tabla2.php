

<h1>
    <center>***Tablas de multiplicar***</center>
</h1>
<hr>
<div>
    <form method="post">
        <label>Ingrese un numero : </label>
        <input type="text" name="txtNumero">
        <button type="submit" name="btnProceso">Proceso</button>
    </form>


</div>

<?php
if (isset($_POST["btnProceso"])) {
    $nume = $_POST["txtNumero"];
    $a=0;
    while ($a <= 10) {
        $resul=$nume*$a;
        echo $nume." X ".$a." = ".$resul."<br>";
        $a++;
    }
   
}



?>
<hr>
<label>Numero ingresado: </label> <?php echo $nume; ?>
<br><label>Calculos totales: </label> <?php echo $a; ?> </br>

