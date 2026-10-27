<?php

$servidor = getenv('MYSQLHOST') ?: 'mysql.railway.internal';
$usuario = getenv('MYSQLUSER') ?: 'root';
$clave = getenv('MYSQLPASSWORD') ?: 'QDIczPxlNKMLrykAessYpqJNWmeKHdKZ';
$bd = getenv('MYSQLDATABASE') ?: 'railway';
$puerto = getenv('MYSQLPORT') ?: '3306';

$conexion = mysqli_connect($servidor, $usuario, $clave, $bd, (int)$puerto);

if(!$conexion) {
  die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content=width="device-width", initial-scale="1.0">
    <title>formulario</title>
  </head>
  <body>

<form action"#" name="formulario" method="post">

</center>
  
<div style="display: flex; justify-content: space-between; align-items: center;">
  <img src="cristo.jpg" alt="Izquierda" width="200">
  <img src="rcces.jpg" alt="Derecha" width="200">
</div>
  
<center><font size="16" color="1C1C1C"><b> Parroquia Cristo Redentor Del Hombre </b><p>
"Seminario de Vida en el Espíritu 2026"<p>
<b>FICHA DE INSCRIPCIÓN</b><p>
<font size="12">
</center>


<p><b>¿Qué te pareció?</b></p>
<input type="text" name="queteparecio" placeholder="" required style="width: 500px; padding: 24px; font-size: 32px; border-radius: 15px; border: 2px solid #888""><p> 
<p><b>¿Qué sí te gustó?</b></p>
<input type="text" name="quetegusto" placeholder="" required style="width: 500px; padding: 24px; font-size: 32px; border-radius: 15px; border: 2px solid #888""><p> 
<p><b>¿Qué no te gustó?</b></p>
<input type="text" name="quenotegusto" placeholder="" required style="width: 500px; padding: 24px; font-size: 32px; border-radius: 15px; border: 2px solid #888""><p>



  <center>
<input type="submit" name="registro" style="width: 350px; padding: 24px; font-size: 32px;"><br>
</center>

<p><center><font face="arial" size="12" color="1C1C1C"><b> !Te esperamos 15 minutos antes de las 8¡ </p>

</form>

  </body>

<?php



if(isset($_POST['registro'])){

$queteparecio= $_POST ['queteparecio'];
$quetegusto= $_POST ['quetegusto'];
$quenotegusto= $_POST ['quenotegusto'];


$insertarDatos = "INSERT INTO datos VALUES('$queteparecio', '$quetegusto','$quenotegusto')";

$ejecutarInstertar = mysqli_query ($conexion, $insertarDatos);

}
?>
