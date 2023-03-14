<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="module/boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/estilo_admin.css">
    <link rel="stylesheet" href="/css/carga.css">
    <title>Administrador | DABYC</title>
</head>

<body>

    <body class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="Admin/admin_.php">
                        <!--<img src="img/logo.jpeg" alt=""> -->
                        <span class="title">Fundacion | DABYC</span>
                    </a>
                </li>
                <li>
                    <a href="Admin/admin_.html">
                        <span class="icon"><ion-icon name="home"></ion-icon></span>
                        <span class="title">Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="usuarios_admin.php">
                        <span class="icon"><ion-icon name="person-add"></ion-icon></span>
                        <span class="title">Usuarios</span>
                    </a>
                </li>
                <li>
                    <a href="proyecto_admin.php">
                        <span class="icon"><ion-icon name="cloud-upload"></ion-icon></span>
                        <span class="title">Proyectos</span>
                    </a>
                </li>
                <li>
                    <a href="gestion_contacto.php">
                        <span class="icon"><ion-icon name="clipboard"></ion-icon></span>
                        <span class="title">Gestion de Contactos</span>
                    </a>
                </li>
                <li>
                    <a href="../index.php">
                        <span class="icon"><ion-icon name="log-out"></ion-icon></span>
                        <span class="title">Salir</span>
                    </a>
                </li>
            </ul>
        </div>
        <!--menu-->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu"></ion-icon>
                </div>
            </div>
            <!--formulario-->
            <div class="details">
                <div class="recenOrders">
                    <div class="cardHeader">
                    </div>
                    <br /><br />
                    <center>
                        <fieldset class="formulario1">

                            <form>
                                <br />
                                <legend class="Datos">Rol de Usuario </legend>
                                <br />

                                <label for="nombre" class="nombre">Nombre del rol</label><br />
                                <input type="text" id="nombre" name="nombre" placeholder="Escribe el nombre del rol" required="true" /><br />
                                <br />

                                <label for="nombre" class="nombre">Número de Rol</label><br />
                                <input type="text" id="nombre" name="nombre" placeholder="Escribe el numero del rol" required="true" /><br />
                                <br />

                                <!--<div class="mb-3">
                                    <label id="etiqueta" for="disabledSelect" class="form-label">Roles</label>
                                    <select id="disabledSelect" class="form-select">
                                      <option></option>
                                      <option>Administrador</option>
                                      <option>Donante</option>
                                      <option>Otro</option>
                                    </select>
                                  </div>
                                <br/>-->
                                <div>
                                    <form action="#">
                                        <input type="submit" value="Enviar" class="btn">
                                    </form>
                                </div>
                                <br>
                                <div>
                                    <a href="rol-admin.html"><button class="btn" style="background-color:red;">Salir</button></a>
                                </div>
                                <br />
                            </form>

                        </fieldset>
                    </center>

                    <script src="../js/script.js"></script>


                    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


                    <script>
                        //menutoggle
                        let toggle = document.querySelector('.toggle');
                        let navigation = document.querySelector('.navigation');
                        let main = document.querySelector('.main');

                        toggle.onclick = function() {
                            navigation.classList.toggle('active');
                            main.classList.toggle('active');
                        }

                        let list = document.querySelectorAll('.navigation li ');

                        function activelink() {
                            list.forEach((item) =>
                                item.classList.remove('hovered'));
                            this.classList.add('hovered')
                        }
                        list.forEach((item) =>
                            item.addEventListener('mouseover', activelink));
                    </script>
    </body>

</html>