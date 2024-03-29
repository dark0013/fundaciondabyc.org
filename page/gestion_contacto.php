<php>
<?php include('master/header.php') ?>

<?php include('master/navbar.php') ?>

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
                    <!--buscar-->
                    <div class="search">
                        <label>
                            <input type="text" placeholder="Buscar">
                            <ion-icon name="search"></ion-icon>
                        </label>
                    </div>
                    <!--imgUsuario-->
                    <div class="user">
                        <img src="user.jpg">
                    </div>
                </div>
                <!--cartas-->
                <div class="cardBox">
                    <div class="card">
                        <div>
                            <div class="numbers">1,504</div>
                            <div class="cardName">Beneficiarios</div>
                        </div>
                        <div class="iconBox">
                            <ion-icon name="heart"></ion-icon>
                        </div>
                    </div>
                    <div class="card">
                        <div>
                            <div class="numbers">80</div>
                            <div class="cardName">Donantes</div>
                        </div>
                        <div class="iconBox">
                            <ion-icon name="basket"></ion-icon>
                        </div>
                    </div>
                    <div class="card">
                        <div>
                            <div class="numbers">284</div>
                            <div class="cardName">Voluntarios</div>
                        </div>
                        <div class="iconBox">
                            <ion-icon name="people"></ion-icon>
                        </div>
                    </div>
                    <div class="card">
                        <div>
                            <div class="numbers">80</div>
                            <div class="cardName">Bitácora de Sesiones</div>
                        </div>
                        <div class="iconBox">
                            <ion-icon name="folder"></ion-icon>
                        </div>
                    </div>
                </div>


                <script src="../js/script.js"></script>


                <script type="module" src="../module/boostrap/js/ionicons.esm.js"></script>
                <script nomodule src="../module/boostrap/js/ionicons.js"></script>



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
</php>