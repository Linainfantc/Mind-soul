<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Mind & Soul - Tu mente y alma son los mas importante</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
<?php session_start(); ?>
    <!-- ################# Header Starts Here#######################--->

    <header id="menu-jk">
        <nav  class="">
            <div class="container">
                <div class="row nav-ro">
                   <div class="col-lg-3 col-md-4 col-sm-12">
                       <img src="assets/images/logo.png" alt="" >
                       <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                   </div>
                   <div id="menu" class="col-lg-7 col-md-8 d-none d-md-block no-padding">
                       <ul>
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="acerca.php">Acerca de nosotros</a></li>
                            <li><a href="servicios.php">Servicios</a></li>
                            <li><a href="contacto.php">Contacta con nosotros</a></li>
                            <?php
                            if(!isset($_SESSION['user'])){?>
                            <li><a href="registro.php">Registrate</a></li>
                            <?php }?>
                            <?php
                            if(isset($_SESSION['user'])){?>
                                <?php if($_SESSION['rol']=="Administrador"){?>
                            <li><a href="admin.php">Panel de administraci??n</a></li>
                            <?php }
                                }?>

                        </ul>
                   </div>
                  
                   <div class="col-sm-2 d-none d-lg-block">
                   <?php
                if(!isset($_SESSION['user'])){?>
                  <button class="btn btn-success"><a href="login.php" style="color:white">Inicia sesi??n</a></button>
                            <?php 
                                }else{
                                    ?>
                  <button class="btn btn-success"><a href="cerrar.php" style="color:white">Cerrar sesi??n</a></button>
                  <?php } ?>
                   </div>
                  
                </div>
            </div>
        </nav>
    </header>

    <!-- ################# Slider Starts Here#######################--->
     <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img"><img src="assets/images/slider/slider-1.jpg" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="slider-captions">
                                    <h1 class="slider-title">Tu mente y alma son los mas importantes</h1>
                                    <p class="slider-text hidden-xs">Porque es importante c??mo te sientes y c??mo manejas tu entorno, es por eso que ac?? nos preocupamos por tu cuidado integral.</p>
                                    <a href="servicios.php" class="btn btn-success hidden-xs">Conoce nuestros servicios</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-2.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h1 class="slider-title">Es tiempo de tomar el control de tu vida</h1>
                                <p class="slider-text hidden-xs">Es importante que tu vida sea ??nica, tranquila y plena, es por eso que ac?? tus emociones y expresiones si importan.</p>
                                <a href="servicios.php" class="btn btn-success hidden-xs">Quiero saber m??s</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"> <img src="assets/images/slider/slider-3.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h1 class="slider-title">Conoce nuestro equipo</h1>
                                <p class="slider-text hidden-xs">Los mejores psicologos y especialistas estar??n dispuestos a escucharte siempre y a atenderte con la mejor calidad humana posible.</p>
                                <a href="acerca.php" class="btn btn-success hidden-xs">Conocenos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="our-blog container-fluid">
  		<div class="container">
  		<div class="session-title row">
  		    <h2>Nuestros servicios</h2>
  		    <p>Elegimos los mejores psic??logos cl??nicos para ti</p>
  		</div>
  			<div class="col-sm-12 blog-cont">
  				<div class="row no-margin">
  					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="assets/images/services/service-1.jpg" alt="">

							<div class="blog-single-det">
							
								<h6>Depresi??n</h6>
								<p>??No encuentras respuestas? ??Te sientes agotado en todo momento? ac?? en Mind Soul te ayudamos a tratar tus emociones y expresiones como parte de ti.</p>
								<a href="blog_single.php">
									<button class="btn btn-success btn-sm">M??s detalles</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="assets/images/services/service-2.jpg" alt="">

							<div class="blog-single-det">
								
								<h6>Ansiedad</h6>
								<p> i sufre problemas de Ansiedad no dude en consultar con uno de nuestros psic??logos, que le ayudar??n, a trav??s de distintos tipos de tratamientos y terapias a controlar su ansiedad y los s??ntomas y efectos colaterales que conlleva.</p>
								<a href="servicios.php">
									<button class="btn btn-success btn-sm">M??s detalles</button>
								</a>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="assets/images/services/service-3.jpg" alt="">

							<div class="blog-single-det">
							
								<h6>Problemas de pareja</h6>
								<p>Buscamos solucionar conflictos que parecieran no tener soluci??n, cambiar y mejorar conductas en la relaci??n, incentivamos la empat??a y la buena comunicaci??n partiendo de la identificaci??n de temperamentos</p>
								<a href="servicios.php">
									<button class="btn btn-success btn-sm">M??s detalles</button>
								</a>
							</div>
						</div>
					</div>
					
					
					
				
					
					
  				</div>
  			</div>
  			
  		</div>
  	</section>  
  	<div class="mosion-vision">
  	    <div class="container">
  	        <div class="row">
  	            <div class="col-lg-4 col-md-12">
  	                <div class="single-dd">
  	                    <h4>??Quienes somos?</h4>
  	                    <p>Mind&soul.co no presta servicios de salud mental ni atenci??n m??dica, s??lo conectamos usuarios con psic??logos certificados, por lo tanto no prescribimos medicamentos. Si est??s pasando por una crisis o emergencia, por favor comun??cate a los servicios de emergencia m??s cercanos a tu localidad.</p>
  	                    
  	                    
  	                </div>
  	            </div>
  	            
  	            <div class="col-lg-4 col-md-12">
  	                 <div class="single-dd">
  	                    <h4>??Por qu?? escogernos?</h4>
                        <p>Encuentra calidez, seguridad y compromiso de la mano de nuestros Psic??logos y Terapeutas. Nuestros expertos pueden ayudarte con esa situaci??n compleja por la que est??s pasando, para que recuperes el equilibrio y la tranquilidad que tanto anhelas</p>
             
  	                    
  	                    
  	                </div>
  	            </div>
  	        </div>
  	    </div>
  	</div>
  	
 	<!-- ################# Our Session Starts Here#######################--->  	
  	
  	<section class="sesion-type">
  	    <div class="container">
             <div class="session-title row">
  		    <h2>M??s de nuestros servicios</h2>
  		    <p>??A??n te preguntas que podemos hacer por ti? Ac?? tenemos algunos de nuestros servicios para ti</p>
  		</div>
  	        <div class="row">
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="assets/images/session/therapy-1.jpg" alt="">
  	                    <p>Terapia Individual</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="assets/images/session/therapy-2.jpg" alt="">
  	                    <p>Terapia de Pareja</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="assets/images/session/therapy-3.jpg" alt="">
  	                    <p>Sesi??n en linea</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="assets/images/session/therapy-4.jpg" alt="">
  	                    <p>Terapia grupal</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="assets/images/session/therapy-5.jpg" alt="">
  	                    <p>Grupos de todas las edades</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess sess-ok">
  	                   <h4>No solo tenemos esto para ti...</h4>
  	                    <p>En Mind & Soul tenemos m??s servicios que ofrecer, conocelos. </p>
  	                    <button class="btn btn-success"><a href="servicios.php" style="color:white;">Quiero saber m??s</a> </button>
  	                </div>
  	            </div>
  	        </div>
  	    </div>
  	</section>
  	

    

      <!-- ################# Footer Starts Here#######################--->


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>Acerca de nosotros</h2>
                    <p>Mind&soul.co no presta servicios de salud mental ni atenci??n m??dica, s??lo conectamos usuarios con psic??logos certificados, por lo tanto no prescribimos medicamentos. Si est??s pasando por una crisis o emergencia, por favor comun??cate a los servicios de emergencia m??s cercanos a tu localidad.</p>

                </div>
                <div class="col-md-4 col-sm-12">
                    <h2>Links</h2>
                    <ul class="list-unstyled link-list"> 
                        <li><a  href="index.php">Inicio</a><i class="fa fa-angle-right"></i></li>
                        <li><a  href="acerca.php">Acerca de nosotros</a><i class="fa fa-angle-right"></i></li>
                        <li><a  href="servicios.php">Servicios</a><i class="fa fa-angle-right"></i></li>
                        <li><a  href="contacto.php">Contacta con nosotros</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Nuestro contacto</h2>
                    <address class="md-margin-bottom-40">
                        Mind & Soul <br>
                        Bogot?? Colombia <br>
                        T??lefono: +57 325 8975214 <br>
                        Email: contacto@mindsoul.co<br>
                    </address>

                </div>
            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
                <a href="#">2022 &copy; Derechos reservados | MIND&SOUL</a>
                
                <span>
                <a><i class="fab fa-instagram"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
        </span>
            </div>

        </div>
    
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
  if(isset($_SESSION['esnuevo'])){?>
   
   <script>
      Swal.fire({
        icon: 'success',
        title: 'Registro exitoso',
        text: 'Muchas gracias por registrarte en nuestro sistema'
      });
    </script>
    <?php  session_destroy();
        header("Location: index.php");
    ?>
  <?php }
?>

<?php
  if(isset($_SESSION['mensaje'])){?>
   
   <script>
      Swal.fire({
        icon: 'info',
        title: '??Bienvenido!',
        text: 'Hola <?=$_SESSION['nombres']?>, es bueno tenerte de vuelta.'
      });
    </script>
  <?php }
?>


</html>