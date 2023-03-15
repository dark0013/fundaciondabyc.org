    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/login.css">
        <link rel="icon" href="assets/ico/ico.png" type="image/jpg" />
        <link rel="stylesheet" href="module/boostrap/css/bootstrap.min.css">
    </head>

    <body>
        <div class="contenedor">
            <div class="hijo py-4 px-4 rounded">
                <div class="logo"> <img src="assets/img/login/logo.jpeg" class="rounded-circle" alt="" srcset=""></div>

                <form id="login-form">
                    <div class="form-group ">
                        <small  for="username" class="form-text etiquetas">USUARIO</small>
                        <input id="txt_nombre_user" type="text" name="txt_nombre_user"  class="form-control rounded-0 txt_formulario" required>
                    </div>

                    <div class="form-group mt-4">
                        <small  for="password" class="form-text etiquetas">PASSWORD</small>
                        <input id="txt_contrasenia" type="password" name="txt_contrasenia"  class="form-control rounded-0 txt_formulario" required>
                    </div>
                    <div class="form-group form-check mt-4">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label etiquetas" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="col-md-12">
                    <button type="button" id="btn_Login" class="btn-boton-x mb-2">Inicio</button>
                    </div>
                    <div class="col-md-12">
                    <button class="btn-boton-x mb-2"><a lass="btn-boton-x mb-2" href="index.php"> Regresar al inicio</a></button>
                    </div>

                </form>

            </div>
        </div>

        <script src="js/eventos/login/login.js"></script>
        <script src="module/jquery/jquery-3.6.1.min.js"></script>
        <script src="module/boostrap/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
