<?php include('../master/header.php') ?>

<link rel="stylesheet" href="../../css/proyecto.css">
<?php include('../master/navbar.php') ?>

<setion class="home-section">
    <div class="home-content">
        <i class='bx bx-menu'></i>
    </div>
    <div class="container">
        <form action="action_page.php">
            <input type="hidden" id="txt_id_proyect">
            <label for="title">Titulo:</label>
            <input type="text" id="title" name="title" placeholder="Título..">
            <label for="date">Fecha:</label>
            <input type="datetime-local" id="date" name="date" placeholder="Fecha..">
            <label for="description">Descripción:</label>
            <textarea id="description" name="description" placeholder="Descripción.." style="height:200px"></textarea>
            <label for="file">Archivo:</label>
            <input type="file" id="file" name="file" placeholder="Archivo..">
            <input type="button" id="btn_guardar" value="Guardar">
            <input type="button" id="btn_editar" value="ACTUALIZAR" >
            <input type="button" id="btn_inactivar" value="Inactivar">

        </form>
    </div>
</setion>
<section id="tabla">
<table id="tblDatos1"  class="table table-striped table-bordered" style="width: 100%">
      <thead>
        <tr >
          <th>ID</th>
          <th>title</th>
          <th>url_image</th>
          <th>description</th>
          <th>date_creation</th>
          <th>status</th>
        </tr>
      </thead>
    </table>
</section>



<script src="../../js/eventos/proyecto/proyecto_admin.js"></script>
<?php include('../master/script.php') ?>