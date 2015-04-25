
<?php

/* start the session */
session_start();

?>

<html>
<head>
<title>Problema</title>
</head>
<body>

<?php

  

  $imagen=$_FILES['foto']['tmp_name'];//contenido del archivo
  $nomimagen=$_FILES['foto']['name'];//nombre
  $tipoimagen=$_FILES['foto']['type'];//tipo
  $tamimagen=$_FILES['foto']['size'];//tamaño



  //post
  $nombre = $_POST['nombre'];
  $descripcion=$_POST['descripcion'];
  $rubro=$_POST['rubro'];
  $marca=$_POST['marca'];

  //echo $descripcion.' '.$nombre.' '.$categoria.' '.$rubro;

  $fp=fopen($imagen,'rb'); //abrimos el archivo binario "imagen" en modo lectura
  $contenido=fread($fp,$tamimagen);//lee el archivo hasta el tamaño de la imagen
  $contenido=addslashes($contenido);//Añadimos caracteres de escape
  fclose($fp); //cerramos el archivo
  
  include("connectionDB.php");

  mysql_query("insert into imagen(imagen,nombre,descripcion,rubro,marca) values ('$contenido','$nombre','$descripcion','$rubro','$marca')", $conexion) 
         or die("problemas en el alta");
    
  mysql_close($conexion);
  echo "Datos cargados, ";

echo $_SESSION['username']; 

///echo "<a href=\"single.html\"> <img src=\"traerImagen.php?id=".$fila["id"]."\"  />";   
/*echo "<a href=\"administracion.php?username=".$_SESSION["username"]."\">
Retornar</a>";
*/

//echo "<a href=\"administracion.php?username=nico&password=123\">
//Retornar</a>";



  echo "<form action=\"..\..\administracion.php\" method=\"post\">";
  echo "<input name=\"username\" type=\"hidden\" value=".$_SESSION["username"].">";
  echo "<input name=\"password\" type=\"hidden\" value=".$_SESSION["password"]." >";
  echo "<input name=\"login\" type=\"submit\" value=\"retornar\"></form>";


?>
<br>



</body>
</html>
