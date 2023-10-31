

<h1>
    <center>***Tablas de multiplicar***</center>
</h1>
<hr>
<div>
    <form method="post"> 
        <label>Ingrese un numero : </label>
        <input type="text" name="txtNumero"
        placeholder="Un valor entero"
        value="<?php if(isset($num))echo $num; ?>" >
        
        <button type="submit" name="btnProceso">Proceso</button>
    </form>


</div>
<?php

if(isset($_POST["btnProceso"])){
    $num=$_POST["txtNumero"];
    for($k=1; $k<=10; $k++){
        $resultado=$num*$k;
        echo $num." X ".$k." = ".$resultado."<br>";
    }
}


?>
<label>Numero: </label> <?php echo $num; ?>
<br><label>Calculos: </label> <?php echo $k; ?> </br>

