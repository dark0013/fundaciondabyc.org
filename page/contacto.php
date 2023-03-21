<php>
    <?php include('menu/navbar_sub.php') ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="icon" href="../assets/ico/ico.png" type="image/jpg" />
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DABYC | Contactos</title>
        <link rel="stylesheet" href="../module/boostrap/css/bootstrap.min.css">
        <link href="../module/boostrap/css/style.css" rel="stylesheet"><!-- Responsive CSS -->
        <!--<link href="../module/boostrap/css/owl.carousel.css" rel="stylesheet"> Style CSS -->
        <!--<link href="../module/boostrap/css/flaticon.css" rel="stylesheet"> Owl Carousel CSS -->
        <!--<link href="../module/boostrap/css/font-awesome.min.css" rel="stylesheet"> Line Awesome CSS -->
        <!--<link href="../module/boostrap/css/line-awesome.min.css" rel="stylesheet"> Animate CSS-->
        <link rel="stylesheet" href="../css/contacto.css" />
        <link rel="stylesheet" href="../css/ico.css">
        <script src="../module/boostrap/js/kits.js" crossorigin="anonymous"></script>

    </head>

    <body>

        <div class="imgfondo1">
            <div class="contact-section section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="section-title2">
                                <h2>Encuentranos de manera fácil</h2>
                            </div>
                            <div class="contact-form">
                                <h3>Danos tu mensaje</h3>
                                <form>
                                    <input type="hidden" class="form-control" id="txt_id_user">
                                    <input type="hidden" class="form-control" id="txt_status" value="C">
                                    <input type="text" name="txt_nombre_completo" id="txt_nombre_completo" required="" placeholder="Nombre Completo">
                                    <input type="email" name="txt_correo_electronico" id="txt_correo_electronico" required="" placeholder="Correo Electronico">
                                    <input type="text" name="txt_numero_telefonico" id="txt_numero_telefonico" placeholder="Numero Telefonico">
                                    <textarea name="txt_escribe_tu_mensaje" id="txt_escribe_tu_mensaje" cols="30" rows="10" required="" placeholder="Escribe tu mensaje"></textarea>
                                </form>
                                <button id="btn_Enviar_Mensaje" type="submit" name="submit">Enviar Mensaje</button>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 espaciado">

                            <div class="section-title2">
                                <h2>Unete a Nosotros</h2>
                            </div>
                            <div class="contact-form">
                                <h3>Subscribirse</h3>
                                <form name="contact-form" id="contactForm">
                                    <input type="hidden" class="form-control" id="txt_id_user">
                                    <input type="hidden" class="form-control" id="txt_statu" value="S">
                                    <input type="text" name="txt_cedula" id="txt_cedula" required="" placeholder="Cedula de Identidad">
                                    <input type="text" name="txt_nombre_completo" id="txt_nombre_completoS" required="" placeholder="Nombre Completo">
                                    <input type="email" name="email" id="txt_correo_electronicoS" required="" placeholder="Correo Electronico">
                                    <input type="text" name="txt_numero_telefonico" id="txt_numero_telefonicoS" placeholder="Numero Telefonico">
                                    <input name="txt_escribe_tu_mensaje" id="txt_escribe_tu_mensajeS" cols="30" rows="10" required="" placeholder="Direccion">
                                    <button type="submit" id="btn_subscribirse" name="submit">Subscribirse</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-area section-padding pad-bot-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="map-section"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.9057233475432!2d-79.89125468524475!3d-2.1894129984041335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6d41ea912101%3A0xc3d2d616e86cadf8!2sFUNDACION%20DIOS%20ABRE%20BRECHA%20Y%20CAMINO!5e0!3m2!1ses!2sec!4v1673236645261!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-area">
            <div class="container">
                <div class="footer-up">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div><a class="navbar-brand" href="#"><img src="../assets/img/img_donacion/logo.png" alt=""></a>
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
                                <li><a href="/index.html">Inicio</a><a href="nosotros.html">Nosotros</a><a href="contacto.html">Contactanos</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6  footer-bottom">
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
                            <p class="copyright-line">© 2020 Todos los Derechos Reservados<a href="/index.html" title="">|
                                    DABYC</a>.</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="privacy">Politica de privacidad | Terminos &amp; Condicions</p>
                        </div>
                    </div>
                </div>
        </footer><!-- Scroll Top Area --><a href="#top" class="go-top" style="display: block;">
            <i class="fa fa-angle-up"></i></a><!-- Popper JS -->


        <script src="../module/jquery/jquery-3.6.1.min.js"></script>
        <script src="../module/boostrap/js/bootstrap.bundle.min.js"></script>
        <script src="../js/eventos/contacto/contacto_admin.js"></script>

    </body>

    </html>
</php>