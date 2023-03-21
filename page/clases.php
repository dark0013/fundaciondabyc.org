<php>
<?php include('menu/navbar_sub.php') ?>

    <!DOCTYPE php>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BABYC | Formulario de Clases</title>
        <link rel="icon" href="../assets/ico/ico.png" type="image/jpg" />
        <link rel="stylesheet" href="../module/boostrap/css/bootstrap.min.css">
        <link href="../module/boostrap/css/owl.carousel.css" rel="stylesheet"><!-- Style CSS -->
        <link href="../module/boostrap/css/flaticon.css" rel="stylesheet"><!-- Owl Carousel CSS -->
        <!--<link href="../module/boostrap/css/font-awesome.min.css" rel="stylesheet"> Line Awesome CSS -->
        <!--<link href="../module/boostrap/css/line-awesome.min.css" rel="stylesheet"> Animate CSS-->
        <link href="../module/boostrap/css/style.css" rel="stylesheet"><!-- Responsive CSS -->
        <link href="../css/viveres.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/ico.css">
        <script src="../module/boostrap/js/kits.js" crossorigin="anonymous"></script>

    </head>
    <!--Menu-->

    <body>
        <div class="container1">
            <!---<form class="form1">
                <h2>Donacion de Utiles escolares</h2>
                <h3>Nombres:</h3>
                <input type="text" name="nombre" id="nombre" placeholder="digite sus Nombres">
                <h3>Apellidos:</h3>
                <input type="text" name="apellido" id="apellido" placeholder="digite sus apellidos">
                <h3>Correo electronico:</h3>
                <input type="email" name="email" id="email" placeholder="digite su correo-electronico">
                <h5>Lista de Utiles escolares</h5>
                <h3>Tipo de cuaderno:</h3>
                <div class="container text-center">
                    <div class="row justify-content-start">
                        <div class="row justify-content-evenly">
                            <div class="col-4">
                                <h3>Linea <input type="number" name="linea" id="linea"></h3>
                            </div>
                            <div class="col-4">
                                <h3>Cuadro <input type="number" name="cuadro" id="cuadro"></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <h3>Colores de pluma:</h3><br>
                <div class="container text-center">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3>Rojo <input type="number" name="cantidad" id="rojo"></h3>
                        </div>
                        <div class="col">
                            <h3>Azul <input type="number" name="cantidad" id="azul"></h3>
                        </div>
                        <div class="col">
                            <h3>Negro <input type="number" name="cantidad" id="negro"></h3>
                        </div>
                    </div>
                </div>
                <h3>Cajas lapices de Colores <input type="number" name="colores" id="colores"></h3>
                <div class="container text-center">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2>Sacapuntas <input type="number" name="sacapunta" id="sacapunta"></h2>
                        </div>
                        <div class="col">
                            <h2>Borrador <input type="number" name="borrador" id="borrador"></h2>
                        </div>
                        <div class="col">
                            <h2>Caja de marcadores <input type="number" name="marcadores" id="marcadores"></h2>
                        </div>
                    </div>
                </div>
                <div class="container text-center">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2>Fundas de Hojas de cuadro <input type="number" name="hojas_cuadro" id="hojas_cuadro"></h2>
                        </div>
                        <div class="col">
                            <h2>Fundas de Hojas de linea <input type="number" name="hojas_linea" id="hojas_linea"></h2>
                        </div>
                    </div>
                </div>
                <input type="button" id="btn_guardar" value="Guardar">
                <a href="kits.php"><input type="button" value="Regresar"></a>
            </form>-->
            <form class="form1">
            <h2>Donacion de Útiles escolares</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">NOMBRES</label>
                            <input type="text" required class="form-control" id="txt_nombres" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">CEDULA</label>
                            <input type="text" required="true" class="form-control" id="txt_cedula" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">CELULAR</label>
                            <input type="text" required="true" class="form-control" id="txt_celular" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">CORREO</label>
                            <input type="email" required="true" class="form-control" id="txt_email" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <input type="hidden" class="form-control" id="txt_tipo_donacion" value="UTILES-ESCOLARES">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Tipo de Utiles escolares</label>
                            <select class="form-control" id="tipo_viveres" name="cmb_tipo_viveres">
                                <option value="NULL"></option>
                                <option value="CUADERNO (LINEA)">Cuaderno (Linea)</option>
                                <option value="CUADERNO (CUADRO)">Cuaderno (Cuadro)</option>
                                <option value="PLUMA (AZUL)">Pluma (Azul)</option>
                                <option value="PLUMA (ROJA)">Pluma (Roja)</option>
                                <option value="PLUMA (NEGRA)">Pluma (Negra)</option>
                                <option value="LAPICES DE COLORES">Lapices de colores</option>
                                <option value="SACAPUNTAS">Sacapuntas</option>
                                <option value="BORRADORES">Borrador</option>
                                <option value="CAJA DE MARCADORES">Caja de marcadores</option>
                                <option value="FUNDAS DE HOJAS (LINEA)">Fundas de Hojas (Linea)</option>
                                <option value="FUNDAS DE HOJAS (CUADRO)">Fundas de Hojas (Cuadro)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Cantidad</label>
                            <input type="number" class="form-control" name="txt_cantidad" placeholder="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Tipo de Proteinas</label>
                        <select class="form-control" id="tipo_viveres" name="cmb_tipo_viveres">
                                <option value="NULL"></option>
                                <option value="CUADERNO (LINEA)">Cuaderno (Linea)</option>
                                <option value="CUADERNO (CUADRO)">Cuaderno (Cuadro)</option>
                                <option value="PLUMA (AZUL)">Pluma (Azul)</option>
                                <option value="PLUMA (ROJA)">Pluma (Roja)</option>
                                <option value="PLUMA (NEGRA)">Pluma (Negra)</option>
                                <option value="LAPICES DE COLORES">Lapices de colores</option>
                                <option value="SACAPUNTAS">Sacapuntas</option>
                                <option value="BORRADORES">Borrador</option>
                                <option value="CAJA DE MARCADORES">Caja de marcadores</option>
                                <option value="FUNDAS DE HOJAS (LINEA)">Fundas de Hojas (Linea)</option>
                                <option value="FUNDAS DE HOJAS (CUADRO)">Fundas de Hojas (Cuadro)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Cantidad</label>
                            <input type="number" class="form-control" name="txt_cantidad" placeholder="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Tipo de Proteinas</label>
                        <select class="form-control" id="tipo_viveres" name="cmb_tipo_viveres">
                                <option value="NULL"></option>
                                <option value="CUADERNO (LINEA)">Cuaderno (Linea)</option>
                                <option value="CUADERNO (CUADRO)">Cuaderno (Cuadro)</option>
                                <option value="PLUMA (AZUL)">Pluma (Azul)</option>
                                <option value="PLUMA (ROJA)">Pluma (Roja)</option>
                                <option value="PLUMA (NEGRA)">Pluma (Negra)</option>
                                <option value="LAPICES DE COLORES">Lapices de colores</option>
                                <option value="SACAPUNTAS">Sacapuntas</option>
                                <option value="BORRADORES">Borrador</option>
                                <option value="CAJA DE MARCADORES">Caja de marcadores</option>
                                <option value="FUNDAS DE HOJAS (LINEA)">Fundas de Hojas (Linea)</option>
                                <option value="FUNDAS DE HOJAS (CUADRO)">Fundas de Hojas (Cuadro)</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Cantidad</label>
                            <input type="number" class="form-control" name="txt_cantidad" placeholder="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Tipo de Proteinas</label>
                        <select class="form-control" id="tipo_viveres" name="cmb_tipo_viveres">
                                <option value="NULL"></option>
                                <option value="CUADERNO (LINEA)">Cuaderno (Linea)</option>
                                <option value="CUADERNO (CUADRO)">Cuaderno (Cuadro)</option>
                                <option value="PLUMA (AZUL)">Pluma (Azul)</option>
                                <option value="PLUMA (ROJA)">Pluma (Roja)</option>
                                <option value="PLUMA (NEGRA)">Pluma (Negra)</option>
                                <option value="LAPICES DE COLORES">Lapices de colores</option>
                                <option value="SACAPUNTAS">Sacapuntas</option>
                                <option value="BORRADORES">Borrador</option>
                                <option value="CAJA DE MARCADORES">Caja de marcadores</option>
                                <option value="FUNDAS DE HOJAS (LINEA)">Fundas de Hojas (Linea)</option>
                                <option value="FUNDAS DE HOJAS (CUADRO)">Fundas de Hojas (Cuadro)</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Cantidad</label>
                            <input type="number" class="form-control" name="txt_cantidad" placeholder="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Tipo de Proteinas</label>
                        <select class="form-control" id="tipo_viveres" name="cmb_tipo_viveres">
                                <option value="NULL"></option>
                                <option value="CUADERNO (LINEA)">Cuaderno (Linea)</option>
                                <option value="CUADERNO (CUADRO)">Cuaderno (Cuadro)</option>
                                <option value="PLUMA (AZUL)">Pluma (Azul)</option>
                                <option value="PLUMA (ROJA)">Pluma (Roja)</option>
                                <option value="PLUMA (NEGRA)">Pluma (Negra)</option>
                                <option value="LAPICES DE COLORES">Lapices de colores</option>
                                <option value="SACAPUNTAS">Sacapuntas</option>
                                <option value="BORRADORES">Borrador</option>
                                <option value="CAJA DE MARCADORES">Caja de marcadores</option>
                                <option value="FUNDAS DE HOJAS (LINEA)">Fundas de Hojas (Linea)</option>
                                <option value="FUNDAS DE HOJAS (CUADRO)">Fundas de Hojas (Cuadro)</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Cantidad</label>
                            <input type="number" class="form-control" name="txt_cantidad" placeholder="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Otros Utiles escolares</label>
                            <textarea id="tipo_viveres" name="cmb_tipo_viveres" placeholder="Escribir otros utiles escolares.." style="height:auto"></textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Cantidad</label>
                            <input type="number" class="form-control" name="txt_cantidad" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="button" class="btn btn-primary" id="btn_enviar" value="enviar">
                    </div>
                    <div class="col-md-6">
                        <a href="kits.php"><input type="button" class="btn btn-danger" value="Regresar"></a>
                    </div>
                </div>
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
                                <li><a href="index.php">Inicio</a><a href="about.php">Nosotros</a><a href="contact.php">Contactanos</a></li>
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
                                <form action="index.php"><input type="email" placeholder="Email"><button><i class="fa fa-paper-plane"></i></button></form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="copyright-line">© 2020 Todos los Derechos Reservados<a href="index.php" title="">|
                                    DABYC</a>.</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="privacy">Politica de privacidad | Terminos &amp; Condicions</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Scroll Top Area --><a href="#top" class="go-top" style="display: block;"><i class="fa fa-angle-up"></i></a><!-- Popper JS -->



        <script src="../module/jquery/jquery-3.6.1.min.js"></script>
        <script src="../module/boostrap/js/bootstrap.bundle.min.js"></script>
        <script src="../module/boostrap/js/jquery.counterup.min.js"></script><!-- Owl Carousel JS -->
        <script src="../module/boostrap/js/owl.carousel.min.js"></script><!-- Isotope JS -->
        <script src="../module/boostrap/js/jquery.sticky.js"></script><!-- Progress Bar JS -->
        <script src="../module/boostrap/js/jquery.barfiller.js"></script><!-- Main JS -->
        <script src="../module/boostrap/js/main.js"></script>
        <script src="../js/eventos/kits/viveres.js"></script>
    </body>

    </html>
</php>