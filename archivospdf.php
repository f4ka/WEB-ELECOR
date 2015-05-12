<!DOCTYPE html>
<html>
<head>
<?php include "php/parts/title.php";?>
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

<?php include "php/parts/header.php";?>
			<!-- // container -->


<!-- //header -->
	<div class="men">
		<!-- container -->
		<div class="container">
			<div class="col-md-9 fashions">
				<div class="title">
					<h3>Archivos de informacion</h3>
				</div>
				<div class="fashion-section">
					<div class="fashion-grid1">

                       <?php
function listarArchivos($path) {
	// Abrimos la carpeta que nos pasan como parámetro
	$dir = opendir($path);
	// Leo todos los ficheros de la carpeta
	while ($elemento = readdir($dir)) {
		// Tratamos los elementos . y .. que tienen todas las carpetas
		if ($elemento != "." && $elemento != "..") {
			// Si es una carpeta
			if (is_dir($path . $elemento)) {
				// Muestro la carpeta
				echo "<p><strong>CARPETA: " . $elemento . "</strong></p>";
				// Si es un fichero
			} else {
				// Muestro el fichero
				echo "<table><tr>";
				echo "<td><a href=\"$path/$elemento\" target='_blank'  ><img src=\"images/pdf.png\">" . $elemento . "</a><br /></td>";
				echo "</tr></table>";
			}
		}
	}
}
// Llamamos a la función para que nos muestre el contenido de la carpeta gallery

listarArchivos("./pdfs/");

?>




					 <div class="clearfix"></div>

					</div>
				</div>
			</div>
		</div>


<?php include "php/parts/footer.php";?>
</body>
</html>