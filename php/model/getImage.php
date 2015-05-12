<?php

//include("connectionDB.php"); no funciona aqui ya que no levanta la img

$server = "localhost";
$user = "root";
$password = "";
$bd = "bd_elecor";

$conexion = mysql_connect($server, $user, $password) or
die("Problemas en la conexion");

mysql_select_db($bd, $conexion) or
die("Problemas en la selección de la base de datos");

$registro = mysql_query("select imagen from imagen where id=$_REQUEST[id]", $conexion) or
die("Error en el select:" . mysql_error());

$reg = mysql_fetch_array($registro);

Header("Content-type: image/jpeg");
echo $reg['imagen'];
?>
