<?php include('../master/header.php') ?>

<?php include('../master/navbar.php') ?>

<setion class="home-section">
  <div class="home-content">
    <i class='bx bx-menu'></i>
  </div>
 
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left:35px; margin-top:30px">Agregar Usuario <i class="fa-solid fa-user-plus"></i></button>


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
            <label for="staticEmail" class="col-sm-2 col-form-label">nombre user</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="txt_nombre_user" class="inputform">
            </div>
          </div><br>

          <div class="form-group ">
            <label for="inputPassword" class="col-sm-2 col-form-label">rol</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="txt_rol" class="inputform">
            </div>
          </div><br>

          <div class="form-group ">
            <label for="inputPassword" class="col-sm-2 col-form-label">cedula</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="txt_cedula" class="inputform">
            </div>
          </div><br>

          <div class="form-group">
            <label for="inputPassword" class="col-sm-2 col-form-label">nombre</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="txt_nombre" class="inputform">
            </div>
          </div><br>

          <div class="form-group ">
            <label for="inputPassword" class="col-sm-2 col-form-label">contraseña</label>
            <div class="col-sm-5">
              <input type="password" class="form-control" id="txt_contrasenia" class="inputform">
            </div>
          </div><br>  
        </form>
      </div>
      </div>

      <div class="modal-footer" id="modalfoot">
        
        <input type="button" id="btn_guardar" value="Guardar" class="input1">
        
      </div>
    </div>
  </div>
</div>

</section>
<section>
<div class="modal"  id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Datos</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row">
        <!-- No tocar las id -->
        <form>
          <!-- Favor no eliminar ni modificasr este campo esta oculto -->
          

          <div class="form-group ">
            <label for="staticEmail" class="col-sm-2 col-form-label">nombre user</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="txt_nombre_user1" class="inputform">
            </div>
          </div><br>

          <div class="form-group ">
            <label for="inputPassword" class="col-sm-2 col-form-label">rol</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="txt_rol1" class="inputform">
            </div>
          </div><br>

          <div class="form-group ">
            <label for="inputPassword" class="col-sm-2 col-form-label">cedula</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="txt_cedula1" class="inputform">
            </div>
          </div><br>

          <div class="form-group">
            <label for="inputPassword" class="col-sm-2 col-form-label">nombre</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="txt_nombre1" class="inputform">
            </div>
          </div><br>

          <div class="form-group ">
            <label for="inputPassword" class="col-sm-2 col-form-label">contraseña</label>
            <div class="col-sm-5">
              <input type="password" class="form-control" id="txt_contrasenia1" class="inputform">
            </div>
          </div><br>  
        </form>
      </div>
      </div>

      <div class="modal-footer" id="modalfoot">
        
      <input type="button" id="btn_editar" value="ACTUALIZAR" class="input1" >
      <input type="button" id="btn_inactivar" value="Inactivar" class="input1">

        
      </div>
    </div>
  </div>
</div>

</section>

<section id="tabla">
<table id="tblDatos"  class="table table-striped table-bordered" style="width: 100%" onclick="openModal()" data-bs-toggle="modal" data-bs-target="#exampleModal1">
      <thead>
        <tr >
          <th>ID</th>
          <th>name_users</th>
          <th>identification_card</th>
          <th>pass</th>
          <th>name</th>
          <th>id_rol</th>
          <th>status</th>
          <th>usuario_creacion</th>
          <th>date_creation</th>
        </tr>
      </thead>
    </table>
</section>


   
  



<script>

	function openModal(){
		document.getElementById("exampleModal1").style.display="block";
	}

</script>

<script src="../../js/eventos/usuario/usuarios_admin.js"></script>

<?php include('../master/script.php') ?>

