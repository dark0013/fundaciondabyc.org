<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/estilo_admin.css">
    <link rel="stylesheet" href="/css/carga.css">
    <title>Administrador | DABYC</title>
</head>

<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <!--<img src="img/logo.jpeg" alt=""> -->
                        <span class="title1">Fundacion | DABYC</span>
                    </a>
                </li>
                <li>
                    <a href="/page/admin_.html">
                        <span class="icon"><ion-icon name="home"></ion-icon></span>
                        <span class="title">Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="/page/usuarios_admin.html">
                        <span class="icon"><ion-icon name="person-add"></ion-icon></span>
                        <span class="title">Usuarios</span>
                    </a>
                </li>
                <li>
                    <a href="/page/proyecto_admin.html">
                        <span class="icon"><ion-icon name="cloud-upload"></ion-icon></span>
                        <span class="title">Proyectos</span>
                    </a>
                </li>
                <li>
                    <a href="/page/gestion_contacto.html">
                        <span class="icon"><ion-icon name="clipboard"></ion-icon></span>
                        <span class="title">Gestion de Contactos</span>
                    </a>
                </li>

                <li>
                    <a href="../login.html">
                        <span class="icon"><ion-icon name="log-out"></ion-icon></span>
                        <span class="title">Salir</span>
                    </a>
                </li>
            </ul>
        </div>

        <!--menu-->
        <div class="main">
            <div class="toggle">
                <ion-icon name="menu"></ion-icon>
            </div>


            <!--cartas-->
            <div class="cardBox" style="margin-left: 20%;">
                <div class="card">
                    <a class="cardName" href="page/usuario/roles.php">Agregar Roles</a>
                    <div class="iconBox">
                        <a class="icono" href="page/usuario/roles.php">
                            <i class="fa-solid fa-user-plus"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!--formulario-->
            <d class="details">
                <div class="recenOrders1">
                    <div class="cardHeader">
                        <h2>Roles</h2>

                    </div>
                    <table>
                        <thead class="table">
                            <tr>
                                <td>Nombre</td>
                                <td>Apellido</td>
                                <td>Usuario</td>
                                <td>Contraseña</td>
                                <td>Rol</td>
                                <td>Estado</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Julio</td>
                                <td>Marquez</td>
                                <td>juliomarquez25</td>
                                <td>********</td>
                                <td>Administrador</td>
                                <td><span class="Activo">Activo</span></td>
                            </tr>
                            <tr>
                                <td>Maria</td>
                                <td>Dominguez</td>
                                <td>mariadomi47</td>
                                <td>***********</td>
                                <td>Donante</td>
                                <td><span class="Inactivo">inactivo</span></td>
                            </tr>
                            <tr>
                                <td>Julio</td>
                                <td>Marquez</td>
                                <td>juliomarquez25</td>
                                <td>********</td>
                                <td>Administrador</td>
                                <td><span class="Activo">Activo</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </d>


            <script src="../js/script.js"></script>


            <script src="../module/boostrap/js/kits.js" crossorigin="anonymous"></script>



            <script>

                //menutoggle
                let toggle = document.querySelector('.toggle');
                let navigation = document.querySelector('.navigation');
                let main = document.querySelector('.main');

                toggle.onclick = function () {
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