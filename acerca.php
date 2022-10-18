    <!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Mind & Soul - Tu mente y alma son los mas importante</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.theme.min.css">
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
                            <li><a href="admin.php">Panel de administración</a></li>
                            <?php }
                                }?>

                        </ul>
                   </div>
                  
                   <div class="col-sm-2 d-none d-lg-block">
                   <?php
                if(!isset($_SESSION['user'])){?>
                  <button class="btn btn-success"><a href="login.php" style="color:white">Inicia sesión</a></button>
                            <?php 
                                }else{
                                    ?>
                  <button class="btn btn-success"><a href="cerrar.php" style="color:white">Cerrar sesión</a></button>
                  <?php } ?>
                   </div>
                  
                </div>
            </div>
        </nav>
    </header>
     <!--  ************************* Page Title Starts Here ************************** -->
               <div class="page-nav no-margin row">
                   <div class="container">
                       <div class="row">
                           <h2>Acerca de Mind & Soul</h2>
                           
                       </div>
                   </div>
               </div>
       
         <!-- ######## Page  Title End ####### -->
         
         <!--  ************************* About Us Content Start Here  ************************** -->
            <div class="about-us">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <img src="assets/images/aboout.jpg" alt="">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <h2>Bienvenido a Mind & Soul donde tu mente y alma son los mas importante</h2>
                            <p>Esta ciencia se ocupa de los factores biológicos, sociales y culturales del comportamiento humano; así mismo estudia el desarrollo, el aprendizaje, los procesos cognitivos, entre otros campos.

¿Cuándo asistir a cita de psicología?.

Cuando sea necesaria la valoración por parte de un psicólogo para manejar situaciones que involucren el comportamiento y desarrollo humano. Por ejemplo, cambios o transiciones difíciles de aceptar, dificultades en las relaciones, entre otras situaciones. Los psicólogos están capacitados para realizar terapias, orientaciones vocacionales, seguimiento a casos de niños, adolescentes y adultos.</p>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            
        
        <!-- ######## About US End ####### -->
        	<!-- ################# Mission Vision Starts Here#######################--->
  	
  	<div class="mosion-vision">
  	    <div class="container">
  	        <div class="row">
  	            <div class="col-lg-4 col-md-12">
  	                <div class="single-dd">
  	                    <h4>Acerca de nosotros</h4>
  	                    <p>Somos un centro de Psicología con especialistas en diferentes áreas para ofrecer a todos nuestros pacientes una atención integral que los ayuden a encontrar el equilibrio y la salud mental. Contamos con novedosos equipos y cómodas instalaciones en donde nuestros pacientes pueden sentirse cómodos y seguros de que están recibiendo la atención y el tratamiento adecuado</p>
  	                    
  	                    
  	                </div>
  	            </div>
  	            <div class="col-lg-4 col-md-12">
  	                 <div class="single-dd">
  	                    <h4>¿Te interesa ponerte en contacto con un psicólogo y solicitar tu cita online?</h4>
  	                    <p>Disponemos de un directorio de psicólogos en el que podrás encontrar tanto al profesional que más se adapte a tus necesidades, así como leer sus referencias escritas por otros pacientes. </p>
  	                    
  	                    
  	                </div>
  	            </div>
  	            <div class="col-lg-4 col-md-12">
  	                 <div class="single-dd">
  	                    <h4>¿Por qué elegirnos?</h4>
                        <p>Encuentra calidez, seguridad y compromiso de la mano de nuestros Psicólogos y Terapeutas. Nuestros expertos pueden ayudarte con esa situación compleja por la que estás pasando, para que recuperes el equilibrio y la tranquilidad que tanto anhelas</p>            
  	                    
  	                </div>
  	            </div>
  	        </div>
  	    </div>
  	</div>

      <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Nuestro equipo</h2>
                
            </div>
        </div>
    </div>

      <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <img src="./Imagenes/Lina.png" alt="" style="height: 70%; width:70%;">
                </div>
                <div class="col-md-6 col-sm-12">
                    <h1>Lina Infante</h1>
                    <p>Psicóloga de la Corporación Universitaria Iberoamericana, con enfoque estrategico teórico-conceptuales en salud psicológica de las organizaciones con experiencia Terapia de familia, Habilidades para la vida, Depresión, Ansiedad, Duelos Atención en crisis, conducta Terapia de pareja, Trastornos del estado de ánimo, Trastornos del sueño, Manejo del ser y atención COVID.</p>     
                </div>
            </div>
            
        </div>
    </div>
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <img src="./Imagenes/Diana.png" alt="" style="height: 90%; width:90%;">
                </div>
                <div class="col-md-6 col-sm-12">
                    <h1>Diana Cardenas</h1>
                    <p> Primeros auxilios psicológicos Discapacidad intelectual mental Pautas de crianza Diversidad sexual</p>
                    
                </div>
            </div>
            
        </div>
    </div>

    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <img src="./Imagenes/Katherine.png" alt="" style="height: 90%; width:90%;">
                </div>
                <div class="col-md-6 col-sm-12">
                    <h1>Katerine Burbano</h1>
                    <p> Psicóloga de la Corporación Universitaria Iberoamericana, con enfoque cognitivo conductual. Experiencia con población infantil, adolescente, adulta y en condición de discapacidad brindando atención desde la psicología clínica y educativa.
Terapia familiar, infantil y del adolescente
Terapia de estimulación cognitiva (discapacidad intelectual, trastornos del neurodesarrollo y trastornos del comportamiento)
Trastornos depresivos
Trastornos de ansiedad 
l</p>
                    
                </div>
            </div>
            
        </div>
    </div>
      <!-- ################# Footer Starts Here#######################--->


    
      <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>Acerca de nosotros</h2>
                    <p>Mind&soul.co no presta servicios de salud mental ni atención médica, sólo conectamos usuarios con psicólogos certificados, por lo tanto no prescribimos medicamentos. Si estás pasando por una crisis o emergencia, por favor comunícate a los servicios de emergencia más cercanos a tu localidad.</p>

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
                        Bogotá Colombia <br>
                       Télefono: +57 325 8975214<br>
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
<script src="assets/plugins/testimonial/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>