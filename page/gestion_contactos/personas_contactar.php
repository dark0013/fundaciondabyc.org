<?php include('../master/header.php') ?>

<link rel="stylesheet" href="../../css/proyecto.css">
<?php include('../master/navbar.php') ?>

<setion class="home-section">
    <div class="home-content">
        <i class='bx bx-menu'></i>
    </div>

    <!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left:35px; margin-top:30px">Buscar donante</button>-->

    <section id="tabla">
        <table id="tblDatos" class="table table-striped table-bordered" style="width: 100%" data-bs-target="#exampleModal1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombres y Apellidos</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Description</th>
                    <th>Fecha de creación</th>
                </tr>
            </thead>
        </table>
    </section>


    <script src="../../js/eventos/contacto/contactar.js"></script>
    <?php include('../master/script.php') ?>
</setion>