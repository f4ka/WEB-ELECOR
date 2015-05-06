<div class="men">
		<!-- container -->
		<div class="container" >
			<div class="col-md-9 fashions"  id="detalles">
				<div class="title">
					

					<h3><?php  
					if($_REQUEST["subcategoria"]!="")
					echo "Productos - ".$_REQUEST["categoria"]." (".$_REQUEST["subcategoria"].")"; 
					?> </h3>



				</div>
				<div class="fashion-section" >
					<div class="fashion-grid1" >				
	<?php			
  									include("connectionDB.php");

    								if($_REQUEST["subcategoria"]!=""){
  									
  									if($_REQUEST["categoria"]=="rubros"){
  									$registros=mysql_query("select id,nombre,descripcion,rubro from imagen where rubro=	'$_REQUEST[subcategoria]'   " ,$conexion) 
    								or die("problemas en el select:".mysql_error());
 									}else
    								if($_REQUEST["categoria"]=="marcas" ){
  									$registros=mysql_query("select id,nombre,descripcion,rubro from imagen where marca= '$_REQUEST[subcategoria]'  ",$conexion) 
    								or die("problemas en el select:".mysql_error());
    								}
    								
    								}else {


    								$registros=mysql_query("select id,nombre,descripcion,rubro from imagen  ",$conexion) 
    								or die("problemas en el select:".mysql_error());
    								
    								}

  									while ($fila=mysql_fetch_array($registros))
  									{

							 		echo "<div class=\"col-md-3 fashion-grid\">";
							 		
							 		echo "<a> <img src=\"php/model/getImage.php?id=".$fila["id"]."\"  />";   

								    echo "<div class=\"product\">";

									echo "<h3 align=\"center\">".$fila["nombre"]."</h3>";

									echo "<p><span></span> </p> </div> </a>";					 
								 
							 		echo "<div class=\"fashion-view\"><span></span>";
									
									echo "<div class=\"clearfix\"></div>";

									echo "<h4><a href=\"single.php?id=".$fila["id"]."&desc=".$fila["descripcion"]."\">Detalle</a></h4> </div>	</div>";

  									}
  
  									mysql_close($conexion);
							?>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>