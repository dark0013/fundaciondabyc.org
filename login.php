<php?>

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

            <form>
                <div class="form-group ">
                    <small id="emailHelp" class="form-text  etiquetas">USUARIO</small>
                    <input type="text" class="form-control rounded-0 txt_formulario" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>

                <div class="form-group mt-4">
                    <small id="emailHelp" class="form-text etiquetas">PASSWORD</small>
                    <input type="password" class="form-control rounded-0 txt_formulario" id="exampleInputPassword1">
                </div>
                <div class="form-group form-check mt-4">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label etiquetas" for="exampleCheck1">Check me out</label>
                </div>
                <div class="col-md-12">
                    <a href="page/Admin/admin_.php"><button class="btn-boton-x mb-2"> Inicio </button></a>
                 </div>
                 <div class="col-md-12">
                    <a href="index.php"><button class="btn-boton-x mb-2"> Regresar al inicio</button></a>
                 </div>

            </form>

        </div>
    </div>


    <script src="module/jquery/jquery-3.6.1.min.js"></script>
    <script src="module/boostrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
</php>