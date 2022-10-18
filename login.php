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
                           <h2>Inicia sesión</h2>
                       </div>
                   </div>
               </div>   
         <!-- ######## Page  Title End ####### -->
      <div class="row contact-rooo no-margin">
        <div class="container">
           <div class="row">
            <div style="padding:20px" class="col-lg-10 align-items-center">
            <h1 style="font-size:18px">¡Que bueno tenerte de vuelta!</h1>
            <br>   
            <div class="row text-center" style="padding-left: 50%;" >
                    <form action="iniciar.php" method="POST">
                        
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" id="email" name="email" placeholder="Coloca tu email" required>
                        </div>
                        <div class="form-group">
                          <label for="password">Contraseña</label>
                          <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg">Iniciar sesión</button>
                      </form>
                </div>
            </div>
             <div class="col-sm-6">
                  <div style="margin:50px" class="serv"> 
           </div>    
         </div>
            </div>
        </div>
      </div>
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
<?php
  if(isset($_SESSION['error'])){?>
   
   <script>
      Swal.fire({
        icon: 'warning',
        title: '¡Ups!',
        text: 'Al parecer la contraseña y/o nombre de usuario no son correctos.'
      });
    </script>
    <?php  session_destroy();
        header("Location: index.php");
    ?>
  <?php }
?>
</html>