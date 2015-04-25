	<?php
	$server="localhost";
	$user="root";
	$password="facundo";
	$bd="bd_elecor";  

  $conexion=mysql_connect($server,$user,$password) or
    die("Problemas en la conexion");

  mysql_select_db($bd,$conexion) or
    die("Problemas en la selección de la base de datos");
	
	?>
