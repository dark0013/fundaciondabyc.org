<?php include('../master/header.php') ?>

<?php include('../master/navbar.php') ?>

<setion class="home-section">
  <div class="home-content">
    <i class='bx bx-menu'></i>
  </div>
 
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar Rol <i class="fa-solid fa-user-plus"></i></button>


<!-- Modal -->
<div class="modal"  id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Insertar Datos </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row">
        <!-- No tocar las id -->
        <form>
          <!-- Favor no eliminar ni modificasr este campo esta oculto -->
          <input type="hidden" class="form-control" id="txt_id_user">

          <div class="form-group ">
            <label for="staticEmail" class="col-sm-2 col-form-label">Rol de Usuario</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="txt_nombre_user" class="inputform">
            </div>
          </div><br>

          <div class="form-group ">
            <label for="inputPassword" class="col-sm-2 col-form-label">Codigo de Rol</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="txt_rol" class="inputform">
            </div>
          </div><br>

          <div class="form-group ">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nombre de Usuario</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="txt_cedula" class="inputform">
            </div>
          </div><br>

          <div class="form-group">
            <label for="inputPassword" class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="txt_nombre" class="inputform">
            </div>
          </div><br>

          
        </form>
      </div>
      </div>

      <div class="modal-footer" id="modalfoot">
        
        <input type="button" id="btn_guardar" value="Guardar" class="input1">
        <input type="button" id="btn_editar" value="ACTUALIZAR" class="input1" >
        <input type="button" id="btn_inactivar" value="Inactivar" class="input1">

      </div>
    </div>
  </div>
</div>




<table id="tblDatos"  class="table table-striped table-bordered" style="width: 100%" onclick="openModal()" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <thead>
        <tr >
        <th>id_rol</th>
          <th>rol_users</th>
          <th>cod_rol</th>
          <th>user_name</th>
          <th>status</th>
          <th>date_creation</th>
        </tr>
      </thead>
    </table>

</section>
   
  



<script>

	function openModal(){
		document.getElementById("exampleModal").style.display="block";
	}

</script>

<script src="../../js/eventos/rol/rol_admin.js"></script>

<?php include('../master/script.php') ?>