<?php include ('../master/header.php')?>
        
<?php include ('../master/navbar.php') ?>
   
        <div class="main">
            <div class="toggle">
                <ion-icon name="menu"></ion-icon>
            </div>


            <!--cartas-->
            <div class="cardBox" style="margin-left: 20%;">
                <div class="card">
                    <a class="cardName" href="/usuario/agregar_usuario.php">Agregar Usuarios</a>
                    <div class="iconBox">
                        <a class="icono" href="/usuario/agregar_usuario.php">
                            <i class="fa-solid fa-user-plus"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!--formulario-->
            <d class="details">
                <div class="recenOrders1">
                    <div class="cardHeader">
                        <h2>Usuarios</h2>

                    </div>
                    <table id="tblDatos" class="table table-striped table-bordered" style="width: 100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>ROL</th>
                                <th>ESTADO</th>

                            </tr>
                        </thead>
                    </table>
                    <!--   <table>
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
                    </table> -->
                </div>
            </d>



            <!--  <div class="container">
                <div class="row"></div>
                <div class="col-md-10">
                    <table id="tblDatos" class="table table-striped table-bordered" style="width: 100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>NAME</th>
                                <th>NOM</th>

                            </tr>
                        </thead>
                    </table>
                </div>
            </div> -->














        </div>

<?php include ('../master/script.php') ?>

