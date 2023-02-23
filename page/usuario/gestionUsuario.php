<?php include('../master/header.php') ?>

<?php include('../master/navbar.php') ?>

<setion class="home-section">
  <div class="home-content">
    <i class='bx bx-menu'></i>
  </div>

    <table id="tblDatos" class="table table-striped table-bordered" style="width: 100%">
      <thead>
        <tr>
          <th>ID</th>
          <th>name_users</th>
          <th>identification_card</th>
          <th>pass</th>
          <th>name</th>
          <th>id_rol</th>
          <th>status</th>
          <th>status</th>
          <th>date_creation</th>
        </tr>
      </thead>
    </table>
  </div>



  <div class="row">
    <!-- No tocar las id -->
    <form>
      <!-- Favor no eliminar ni modificasr este campo esta oculto -->

      <input type="hidden" class="form-control" id="txt_id_user">

      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">nombre user</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txt_nombre_user">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">rol</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txt_rol">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">cedula</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txt_cedula">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">nombre</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txt_nombre">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">contraseña</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txt_contrasenia">
        </div>
      </div>


      <div class="row">
        <input type="button" id="btn_guardar" value="guardar">
        <input type="button" id="btn_editar" value="ACTUALIZAR">
        <input type="button" id="btn_inactivar" value="inactivar">
      </div>




    </form>


  </div>
</setion>


<script src="../../js/eventos/usuario/usuarios_admin.js"></script>

<?php include('../master/script.php') ?>