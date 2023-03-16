<php>
<?php include('menu/navbar_sub.php') ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BABYC | Formulario de Proteinas</title>
        <link rel="icon" href="../assets/ico/ico.png" type="image/jpg" />
        <link rel="stylesheet" href="../module/boostrap/css/bootstrap.min.css">
        <link href="../module/boostrap/css/owl.carousel.css" rel="stylesheet"><!-- Style CSS -->
        <link href="../module/boostrap/css/flaticon.css" rel="stylesheet"><!-- Owl Carousel CSS -->
        <!--<link href="../module/boostrap/css/font-awesome.min.css" rel="stylesheet"> Line Awesome CSS -->
        <!--<link href="../module/boostrap/css/line-awesome.min.css" rel="stylesheet"> Animate CSS-->
        <link href="../module/boostrap/css/style.css" rel="stylesheet"><!-- Responsive CSS -->
        <link href="../css/proteina.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/ico.css">
        <script src="../module/boostrap/js/kits.js" crossorigin="anonymous"></script>

    </head>
    <!--Menu-->

    <body>
        <div class="container1">
            <form class="form1">
                <h2>Donacion de Proteinas</h2>
                <h1>Nombres:</h1>
                <input type="text" id="nombre" name="nombre" placeholder="Nombres completos" required>
                <h1>Apellidos:</h1>
                <input type="text" id="apellido" name="apellido" placeholder="Apellidos completos" required>
                <h1>Correo-electronico:</h1>
                <input type="email" id="email" name="email" placeholder="Digite su correo-electronico" required>
                <h5>Proteinas Solidarias</h5>
                <h3>Pollo:</h3>
                <input type="number" id="pollo" name="pollo">
                <h3>Pescado:</h3>
                <input type="number" id="pescado" name="pescado">
                <h3>Carne de res</h3>
                <input type="number" id="res" name="res">
                <h3>Carne de cerdo:</h3>
                <input type="number" id="cerdo" name="cerdo">
                <h3>Huevo</h3>
                <input type="number" id="huevo" name="huevo">
                <input type="button" id="btn_guardar" value="Guardar">
                <a href="kits.php"><input type="button" value="Regresar"></a>
            </form>
        </div>



        <!-- Footer Area -->
        <footer class="footer-area">
            <div class="container">
                <div class="footer-up">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="logo"><a class="navbar-brand" href="#"><img src="../assets/ico/logo.png" alt=""></a>
                            </div>
                            <div class="contact-info">
                                <h5>Informacion Contactos</h5>
                                <p>
                                    <img src="../assets/ico/hogar.png" width="8%">
                                    Matriz - Sauces 4</img>
                                    <br>
                                    <img src="../assets/ico/correo-electronico.png" width="8%">
                                    fundaciondabyc@gmail.com</img>
                                    <br>
                                    <img src="../assets/ico/telefono.png" width="8%">
                                    +593 978728242</img>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 com-sm-12">
                            <h5>Enlaces útiles</h5>
                            <ul>
                                <li><a href="index.html">Inicio</a><a href="about.html">Nosotros</a><a href="contact.html">Contactanos</a></li>
                            </ul>
                        </div>
                        <!--<div class="col-lg-3 col-md-6 col-sm-12">
						<h5>Our Causes</h5>
						<ul>
							<li><a href="#">Water Purify</a><a href="#">Food Collect</a><a href="#">Health Fund</a><a
									href="#">Free Eduction</a><a href="#">Nutritution Fact</a></li>
						</ul>
					</div>-->
                        <div class="col-lg-3 col-md-6 footer-bottom">
                            <div class="subscribe-form">
                                <h5>DABYC</h5>
                                <p>Fundacion Dabyc es una organización sin fines de lucro que lucha por posicionarse
                                    como benefactora de la alimentacion de personas en situación vulnerable</p>
                                <form action="index.html"><input type="email" placeholder="Email"><button><i class="fa fa-paper-plane"></i></button></form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="copyright-line">© 2020 Todos los Derechos Reservados<a href="index.html" title="">|
                                    DABYC</a>.</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="privacy">Politica de privacidad | Terminos &amp; Condicions</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Scroll Top Area --><a href="#top" class="go-top" style="display: block;"><i class="fa fa-angle-up"></i></a>
        <!-- Popper JS -->



        <script src="../module/jquery/jquery-3.6.1.min.js"></script>
        <script src="../module/boostrap/js/bootstrap.bundle.min.js"></script>
        <script src="../module/boostrap/js/jquery.counterup.min.js"></script><!-- Owl Carousel JS -->
        <script src="../module/boostrap/js/owl.carousel.min.js"></script><!-- Isotope JS -->
        <script src="../module/boostrap/js/jquery.sticky.js"></script><!-- Progress Bar JS -->
        <script src="../module/boostrap/js/jquery.barfiller.js"></script><!-- Main JS -->
        <script src="../module/boostrap/js/main.js"></script>
    </body>

    </html>
</php>