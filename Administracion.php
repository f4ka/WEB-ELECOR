<?php
/* start the session */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<?php include("php/parts/title.php"); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Biruang Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstarp-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstarp-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/styleLogin.css" type="text/css" media="all" />
<!--// css -->
<script src="js/jquery.min.js"></script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
<!--/fonts-->
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/scripts.js" type="text/javascript"></script>
<!--js-->
<!--/js-->
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>	
<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
</head>
<body>
	<!-- header -->
<?php

 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "facundo";
 $db_name = "bd_elecor";
 $tbl_name = "usuarios";

// Connect to server and select databse.
mysql_connect("$host_db", "$user_db", "$pass_db")or die("Cannot Connect to Data Base.");

mysql_select_db("$db_name")or die("Cannot Select Data Base");

// sent from form

$login=0;

if(!empty($_POST['username'])) {
$username = $_POST['username'];
$login=1;
}else
	{

		if(!empty($_SESSION['username'])){
		$username=$_SESSION['username'];
		$login=1;
		}

	}


if(!empty($_POST['password'])) {
$password = $_POST['password'];
$login=1;
}else{
		if(!empty($_SESSION['password'])){
		$password=$_SESSION['password'];
		$login=1;
		}

}

///si post(username)!=null and post(password)!=null

if($login==1){

$sql= "SELECT * FROM $tbl_name WHERE usuario = '$username' and Password='$password'";

$result=mysql_query($sql);

// counting table row
$count = mysql_num_rows($result);


// If result matched $username and $password

if($count == 1){

 $_SESSION['loggedin'] = true;

 $_SESSION['username'] = $username;
 $_SESSION['password'] = $password;
  

 $_SESSION['start'] = time();
 $_SESSION['expire'] = $_SESSION['start'] + (5 * 60) ;

	$bandera=1;
}
 else {
 	$bandera=0;
 echo "<br/>Username o Password estan incorrectos.<br>";

 echo "<a href='main_login.html'>Volver a Intentarlo</a>";
}


?>


<?php if($bandera==1){

include("php/parts/header.php");
	?>
	
	<!-- //header -->
	<!-- men -->
	<div class="men">
		<!-- container -->
		<div class="container">
			<div class="col-md-9 fashions">
				<div class="title">
					<div><h3>Administracion - Alta de imagenes</h3><h5><a href="php/model/logout.php">(logout)</a></h5></div>

					<form action="php/model/loadImage.php" method="post" enctype="multipart/form-data">
					
					Seleccione Imagen:
					<input type="file" name="foto"><br>
					Nombre<br>
					<input type="text" name="nombre"><br><br>
					Descripcion<br>	
					<input type="text" name="descripcion"><br><br>
					
					Rubro
					<br>
					<select name="rubro" >
						<option value="Electrico">Electrico</option>
						<option value="Temperatura">Temperatura</option>
						<option value="Termografia">Termografia</option>
						<option value="Calibradores de campo">Calibradores de campo</option>
						<option value="Networks">Networks</option>
						<option value="Distancia">Distancia</option>
						<option value="SHM">Seguridad, higiene y medio ambiente</option>
						<option value="Presion">Presion</option>
						<option value="Metrologia">Metrologia</option>
						<option value="Ensayos no destructivos">Ensayos no destructivos</option>
					</select>
			
					<br>
					<br>
					Marca
					<br>
					<select name="marca" >
						<option value="Fluke">Fluke</option>
						<option value="Amprobe">Amprobe</option>
					</select>
			

					<br>
					<br>
					
					<input type="submit" value="Cargar">

					</form>
				</div>

					<div class="title">
						<h3>Administracion - Baja de imagenes </h3>

					<?php


  include("php/model/connectionDB.php");

  $registros=mysql_query("select id from Imagen",$conexion) 
    or die("problemas en el select:".mysql_error());
  echo "<table border=\"0\" width=\"54%\" >";  
  echo "<tr>";
  echo "<td></td>";
  echo "<td></td>";
  echo "<td></td>";
  echo "</tr>";  
  while ($fila=mysql_fetch_array($registros))
  {
    echo "<tr>";
   // echo "<td>$fila[id]</td>";
 
    echo "<td><img src=\"php\model\getImage.php?id=".$fila["id"]."\"></td>";
   	echo "<td><a href=\"php\model\deleteImage.php?id=".$fila["id"]."\">Eliminar</a></td>";
    echo "</tr>";
  }
  echo "</table>"  ;
  mysql_close($conexion);
?>


				</div>
								


			</div>
			
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	

	</div>
	<!-- //men -->

	<!-- // container -->
	</div>
	<!-- //footer -->

	<?php
	 } 

	}//login
	else {
		echo "						";
		echo "						<h1>POR FAVOR, DEBE LOGUEARSE PARA ADMINISTRAR ESTE SITIO</h1>";
		}
	?>

</body>
</html>