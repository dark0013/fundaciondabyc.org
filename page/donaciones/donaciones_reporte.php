<?php include('../master/header.php') ?>

<link rel="stylesheet" href="../../css/proyecto.css">
<?php include('../master/navbar.php') ?>

<setion class="home-section">
  <div class="home-content">
    <i class='bx bx-menu'></i>
  </div>

  <!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left:35px; margin-top:30px">Buscar donante</button>-->

  <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Insertar Datos </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <form>
              <input type="hidden" id="txt_id_proyect">
              <label for="title">Cedula:</label>
              <input type="text" id="Cedula" name="cedula" placeholder="Cedula..">
              <label for="dateIn">Fecha Inicio:</label>
              <input type="date" id="dateIn" name="dateIn" placeholder="Fecha Inicio..">
              <label for="dateOut">Fecha Fin:</label>
              <input type="date" id="dateOut" name="dateOut" placeholder="Fecha Out..">
            </form>
            <div class="modal-footer" id="modalfoot" style="justify-content: space-evenly;">
              <input type="button" id="btn_guardar" class="btn btn-primary" value="Buscar" class="input1">
              <input type="button" id="btn_cancelar" class="btn btn-danger" value="Cancelar" class="input1">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>

  <section id="tabla">
    <table id="tblDatos" class="table table-striped table-bordered" style="width: 100%"  data-bs-target="#exampleModal1">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombres y Apellidos</th>
          <th>Cédula</th>
          <th>Tipo de producto</th>
          <th>Cantidad</th>
          <th>Descripción</th>
          <th>Estado</th>
          <th>Fecha de creación</th>
        </tr>
      </thead>
    </table>
  </section>


  <script src="../../js/eventos/donantes/donantes.js"></script>
  <?php include('../master/script.php') ?>
</setion>