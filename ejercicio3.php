<?php
//Declaro las variables
$numero1="0";
$resultado="0";
$mensaje="";
$operacion="";
$conjuntoDeOperaciones="";
$sumaOper="";
//Defino si se llama el botón calcular
if(isset($_POST["calcular"])){
//Realizo la operación
$resultado=(int)1;
$numero1=(int)$_POST["numero1"];
for($i=1;$i<=$numero1;$i++){
    $resultado=$resultado*$i;
    $conjuntoDeOperaciones="* ".$i;
    $sumaOper=$sumaOper.$conjuntoDeOperaciones;
$operacion="!".$numero1."=".$sumaOper;
}
$mensaje="El factorial de ".$numero1." es igual a ".$resultado;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Web 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <form method="Post" action="">
        <table>
            <tr>
               <td>Dame un número para calcular su factorial: </td>
               <td>
                   <input type="text" name="numero1" value="<?php echo $numero1 ?>">
               </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="calcular" value="Calcular"></td>
            </tr>
            <tr>
                <td>Mensaje: <?php echo $mensaje?></td>      
            </tr>
            <tr>
                <td>Cálculo de factorial de <?php echo $numero1?>!: </td>
                <tr><td><p  name="calculoDeFactorial"><?php echo $operacion?></p></td></tr>
                <tr><td><p>!<?php echo $numero1?>=<?php echo $resultado?></p></td></tr>
            </tr>
        </table>
    </form>
</body>
</html>