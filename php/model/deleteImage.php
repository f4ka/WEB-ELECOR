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

  include ("connectionDB.php");

  mysql_query("delete from imagen where id=$_REQUEST[id]", $conexion) 
         or die("problemas en la eliminacion");
    
  mysql_close($conexion);
  echo "Imagen eliminada" ;


  echo "<form action=\"..\..\administracion.php\" method=\"post\">";
  echo "<input name=\"username\" type=\"hidden\" value=".$_SESSION["username"].">";
  echo "<input name=\"password\" type=\"hidden\" value=".$_SESSION["password"]." >";
  echo "<input name=\"login\" type=\"submit\" value=\"retornar\"></form>";


?>
<br>

</body>
</html>
