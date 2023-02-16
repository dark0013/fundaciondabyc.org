
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo_admin.css">
    <link rel="stylesheet" href="../css/carga.css">
    <title>Administrador | DABYC</title>
</head>

<body>
    <div class="container">
        
    <?php include "master/navbar.php" ?>
   
        <!--menu-->
        <div class="main">
            <div class="toggle">
                <ion-icon name="menu"></ion-icon>
            </div>


            <!--cartas-->
            <div class="cardBox">

                <div class="card">
                    <a class="cardName" href="/page/usuario-admin.html">Ver Usuario</a>
                    <div class="iconBox">
                        <a class="icono" href="/page/usuario-admin.html">
                            <ion-icon name="eye"></ion-icon>
                        </a>
                    </div>
                </div>
                <div class="card">
                    <br />
                    <a class="cardName" href="/page/rol-admin.html">Ver Roles</a>
                    <div class="iconBox">
                        <a class="icono" href="/page/rol-admin.html">
                            <ion-icon name="eye"></ion-icon>
                        </a>
                    </div>
                </div>
            </div>

            <!--formulario-->
            <!--<d class="details">
                <div class="recenOrders1">
                    <div class="cardHeader">
                        <h2>Usuarios</h2>

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
            </d>-->


            <script src="../js/script.js"></script>


            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
            <script src="https://kit.fontawesome.com/1b1959dac0.js" crossorigin="anonymous"></script>



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