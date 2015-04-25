<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>		
<!-- header -->
	<div class="header">
			<!-- container -->
			<div class="container">
				<!-- header-top -->
				<div class="header-top">
					<div class="header-logo">
						<a href="index.php"><img src="images/logo2.png" alt="" /></a>
					</div>
					<div class="header-right">
						<ul>
							<li class="phone">+371 282 20 760</li>
							<li class="mail"><a href="mailto:example@mail.com">elecor@arnet.com.ar</a></li>
					    </ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- //header-top -->
				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt=""></span>
					<ul class="nav">
						<li class="dropdown1"><a href="index.php">Inicio</a>
						</li>
                        <li class="dropdown1"><a href="productos.php?categoria=&subcategoria=">Productos</a>
						<!--	<ul class="dropdown2">
								<li><a href="productos.php?categoria=rubros&subcategoria=Electrico">Por rubro</a></li>
								<li><a  href="productos.php?categoria=marcas&subcategoria=Fluke">Por marca</a></li>
							</ul>-->
						</li>     
						<li class="dropdown1"><a href="">Servicios</a>
						</li>              
						<li class="dropdown1"><a href="nuestrosClientes.php">Nuestros Clientes</a>
						</li>  
						<li class="dropdown1"><a href="contact.php">Contacto</a>
						</li>  					           
						<li><a href="">Acerca de la empresa</a></li>            
					</ul>
				</div>
				<div class="search">
					<form>
						<input type="text" value="Buscar..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Buscar...';}" required="">
					</form>
				</div>
				<div class="clearfix"> </div>
				<!-- script-for-menu -->
			 <script>
					$("span.menu").click(function(){
						$(" ul.nav").slideToggle("slow" , function(){
						});
					});
			 </script>
			</div>
			<!-- //container -->
		</div>
		<!-- //header -->
</div>