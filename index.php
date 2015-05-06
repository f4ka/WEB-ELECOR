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
<!--// css -->
<script src="js/jquery.min.js"></script>
<script src="js/funciones.js" language="JavaScript"></script>
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
		
<?php include("php/parts/header.php"); ?>
			<!-- // container -->
 

<div class="banner">
			<!-- banner Slider starts Here -->
					<script src="js/responsiveslides.min.js"></script>
					 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					  </script>
					<!--//End-slider-script -->
					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<div class="banner-bg">
								</div>
							</li>
							<li>
								<div class="banner-bg banner-img2">
									<div class="container">
									</div>
								</div>
							</li>
							<li>
								<div class="banner-bg banner-img">
								</div>
							</li>
							<li>
								<div class="banner-bg">
								</div>
							</li>
							<li>
								<div class="banner-bg banner-img2">
								</div>
							</li>
						</ul>
					</div>
	</div>
	<!-- //banner -->
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="banner-bottom-grids">
				<div class="col-md-4 bottom-grid">
					<img src="images/3.jpg" alt="" />
					<div class="bottom-grid-info">
                        <a href="#">Cámara infrarroja Fluke TiX560</a>
                        <p>Su visión con respecto a la tecnología infrarroja está a punto de cambiar en 180°. La respuesta correcta se encuentra ante sus ojos, aun cuando su objetivo no.
						</p>
					</div>
				</div>
				<div class="col-md-4 bottom-grid">
					<img src="images/7.jpg" alt="" />
					<div class="bottom-grid-info">
                        <a href="#">Termómetros visuales de IR VT04 y VT02 de Fluke</a>
                        <p>Deje de buscar y comience a solucionar más rápido. Los termómetros visuales de IR de Fluke fueron diseñados con un mapa de calor e imagen digital, además de marcadores de puntos fríos y calientes para una detección de temperatura clara y rápida
						</p>
					</div>
				</div>
				<div class="col-md-4 bottom-grid">
					<img src="images/5.jpg" alt="" />
					<div class="bottom-grid-info">
                        <a href="#">Herramienta de prueba Fluke 190 serie II ScopeMeter</a>
                        <p>El Fluke 190 serie II combina la potencia de un osciloscopio de alto rendimiento, un multímetro y un registrador digital en una herramienta de prueba fácil de usar en la que podrá confiar.
						</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- banner-bottom -->
	<!-- products -->
	<div class="products">
		<!-- container -->
		<div class="container">
			<div class="products-heading">
				<h3>Productos destacados</h3>
			</div>
			<div class="products-grids">
				<div class="col-md-3 product-left-grid">
					<div class="product-grid">
						<div class="sap_tabs">	
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<img src="images/t1.jpg" class="img-responsive" alt=""/> 
										</div>
									</div>	
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											<img src="images/t2.jpg" class="img-responsive" alt=""/>   
										</div>
									</div>	
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
										<div class="facts">
											<img src="images/t3.jpg" class="img-responsive" alt=""/> 
										</div>
									</div>	         	  
								</div>
								<ul class="resp-tabs-list">
									<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><img src="images/t1.jpg" class="img-responsive" alt=""/></span></li>
									<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><img src="images/t2.jpg" class="img-responsive" alt=""/></span></li>
									<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><img src="images/t3.jpg" class="img-responsive" alt=""/></span></li>
									<div class="clearfix"> </div>
								</ul>	
							</div>
						</div>
						<div class="products-grid-info">
                            
							<h4>Fluke</h4>
                            <p>* Todo acerca de lo que deberia saber *
							</p>
							<div class="like">
								<a href="#"><img src="images/like.png" alt="" /></a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 product-left-grid">
					<div class="product-grid">
						<div class="product-grid-text">
							<a href="single.html"><img src="images/t4.jpg" alt="" /></a>
							<div class="products-grid-info">
								<h3>Fluke</h3>
                                <h4>Analizadores de baterías serie 500 de Fluke</h4>
                                <p>La complejidad reducida de las pruebas, el flujo de trabajo simplificado y la interfaz de usuario intuitiva proporcionan un nuevo nivel de facilidad de uso para la comprobación de la batería.
                                </p>
								<div class="like">
									<a href="#"><img src="images/like.png" alt="" /></a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="plus">
								<a href="single.html"><img src="images/plus.png" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 product-left-grid">
					<div class="product-grid">
						<div class="product-grid-text">
							<a href="single.html"><img src="images/t5.jpg" alt="" /></a>
							<div class="products-grid-info">
                                <h3>Cámara infrarroja Fluke TiX1000</h3>
                                <h4>Serie para expertos</h4>
                                <p>Deje las conjeturas de lado durante los procedimientos de inspección y análisis gracias a la familia de cámaras infrarrojas de mayor rendimiento.
								</p>
								<div class="like">
									<a href="#"><img src="images/like.png" alt="" /></a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="plus">
								<a href="single.html"><img src="images/plus.png" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 product-left-grid">	
					<div class="product-grid">
						<div class="product-grid-text">
							<a href="single.html"><img src="images/t6.jpg" alt="" /></a>
							<div class="products-grid-info">
                                <h3>Estroboscopio LED 820-2</h3>
                                <h4>Robusto, compacto y fácil de usar</h4>
                                <p>Investigue y observe con confianza posibles fallas en el mecanismo
								</p>
								<div class="like">
									<a href="#"><img src="images/like.png" alt="" /></a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="plus">
								<a href="single.html"><img src="images/plus.png" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- // products -->
	<!-- products-bottom -->
	<div class="products-bottom">
		<!-- container -->
		<div class="container">
			<div class="col-md-3 products-bottom-left">
				<h3>Elecor <span></span></h3>
				<p> FLUKE  AMPROBE
				</p>
				<div class="social-icons">
					<ul>
						<li><a href="#" class="facebook"></a></li>
						<li><a href="#" class="twitter"></a></li>
						<li><a href="#" class="chrome"></a></li>
						<li><a href="#" class="vimeo"></a></li>
						<li><a href="#" class="rss"></a></li>
				</div>
			</div>
                <div class="col-md-4 products-bottom-left">
				<h3>Sobre la empresa <span></span></h3>
				<p align="justify"> 
				    La mayoría de los productos que comercializamos, están fabricados bajo normas internacionales y pueden ser    
                    provistos con sus respectivos Certificados de Calibración referidos a patrones Nacionales ó Internacionales.
				</p>
				</div>
			<div class="col-md-5">
			</div>
			<div class="col-md-4 map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2176.1155758807386!2d24.1204355!3d56.946821099999994!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1426480456493" frameborder="0" style="border:0"></iframe>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container-->
	</div>
	<!-- //products-bottom -->
	<!-- sign-up -->
	
	<!-- //sign-up -->
	<?php include("php/parts/footer.php"); ?>
</body>
</html>