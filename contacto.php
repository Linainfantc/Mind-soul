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
     <!--  ************************* Page Title Starts Here ************************** -->
               <div class="page-nav no-margin row">
                   <div class="container">
                       <div class="row">
                           <h2>Contactanos</h2>
                       </div>
                   </div>
               </div>
       
         <!-- ######## Page  Title End ####### -->
         
        
      <div style="margin-top:0px;" class="row no-margin">
        
        <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254508.3928351579!2d-74.24823480893177!3d4.6486258644110485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1665966098767!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"  height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


      </div>

      <div class="row contact-rooo no-margin">
        <div class="container">
           <div class="row">
               
          
            <div style="padding:20px" class="col-sm-6">
            <h2 style="font-size:18px">Envianos tu mensaje y pronto te responderemos</h2>
                <div class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>T?? nombre :</label></div>
                    <div class="col-sm-8"><input type="text" placeholder="" name="name" class="form-control input-sm"  ></div>
                </div>
                <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>T?? Email:</label></div>
                    <div class="col-sm-8"><input type="text" name="name" placeholder="" class="form-control input-sm"  ></div>
                </div>
                 <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>N??mero de telefono:</label></div>
                    <div class="col-sm-8"><input type="text" name="name" placeholder="" class="form-control input-sm"  ></div>
                </div>
                 <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>T?? mensaje:</label></div>
                    <div class="col-sm-8">
                      <textarea rows="5" placeholder="" class="form-control input-sm"></textarea>
                    </div>
                </div>
                 <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                    <div class="col-sm-8">
                     <button class="btn btn-success btn-sm">Enviar mensaje</button>
                    </div>
                </div>
            </div>
             <div class="col-sm-6">
                    
                  <div style="margin:50px" class="serv"> 
          <h2 style="margin-top:10px;">Mind & Soul</h2>
          Bogot?? Colombia <br>
          T??lefono: +57 325 8975214 <br>
          Email: contacto@mindsoul.co<br>    
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
<script src="assets/plugins/testimonial/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>