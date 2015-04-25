<html><head></head>
<body>
<?php

  include ("connectionDB.php");
  
  $registros=mysql_query("select id from Imagen",$conexion) 
    or die("problemas en el select:".mysql_error());
  echo "<table border=\"1\">";  
  echo "<tr>";
  echo "<td>Id</td>";
  echo "<td>Imagen</td>";
  echo "</tr>";  
  while ($fila=mysql_fetch_array($registros))
  {
    echo "<tr>";
    echo "<td>$fila[codigo]</td>";
 
    echo "<td><img src=\"getImage.php?cod=".$fila["id"]."\"></td>";
    echo "</tr>";
  }
  echo "</table>"  ;
  mysql_close($conexion);
?>
<a href="pagina1.html">Retornar</a>
</body></html>