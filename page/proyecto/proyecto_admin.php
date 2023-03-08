<?php include('../master/header.php') ?>

<link rel="stylesheet" href="../../css/proyecto.css">
<?php include('../master/navbar.php') ?>

<setion class="home-section">
    <div class="home-content">
        <i class='bx bx-menu'></i>
    </div>
    <div class="container">
        <form action="action_page.php" enctype="multipart/form-data">
            <label for="title">Titulo:</label>
            <input type="text" id="title" name="title" placeholder="Título..">
            <label for="date">Fecha:</label>
            <input type="date" id="date" name="date" placeholder="Fecha..">
            <label for="description">Descripción:</label>
            <textarea id="description" name="description" placeholder="Descripción.." style="height:200px"></textarea>
            <label for="file">Archivo:</label>
            <input type="file" id="file" name="file" placeholder="Archivo..">
            <input type="submit" value="Enviar">
        </form>
    </div>
</setion>

<script src="../../js/eventos/proyecto/proyecto_admin.js"></script>
<?php include('../master/script.php') ?>