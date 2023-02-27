<?php include('../master/header.php') ?>

<?php include('../master/navbar.php') ?>

<setion class="home-section">
  <div class="home-content">
    <i class='bx bx-menu'></i>
  </div>

  <button id="myBtn">Agregar Usuario <i class="fa-solid fa-user-plus"></i></button>
  <div id="modal" style="display:none" class="modal">
    <div class="modal-content1">
    <span class="close1">&times;</span>
      
      <div class="row">
        <!-- No tocar las id -->
        <form>
          <!-- Favor no eliminar ni modificasr este campo esta oculto -->
          <h1 style="text-align:center">Ingrese los Datos</h1>

          <input type="hidden" class="form-control" id="txt_id_user">

          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">nombre user</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="txt_nombre_user" class="inputform">
            </div>
          </div><br>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">rol</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="txt_rol" class="inputform">
            </div>
          </div><br>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">cedula</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="txt_cedula" class="inputform">
            </div>
          </div><br>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">nombre</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="txt_nombre" class="inputform">
            </div>
          </div><br>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">contraseña</label>
            <div class="col-sm-5">
              <input type="password" class="form-control" id="txt_contrasenia" class="inputform">
            </div>
          </div><br>


            <center>
              <input type="button" id="btn_guardar" value="Guardar" class="input1">
              <input type="button" id="btn_editar" value="ACTUALIZAR" class="input1" >
              <input type="button" id="btn_inactivar" value="Inactivar" class="input1">
            </center>
            
         

        </form>
      </div>
    </div>
  </div>
      

    <table id="tblDatos" class="table table-striped table-bordered" style="width: 100%" onclick="openModal()">
      <thead>
        <tr >
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

</setion>

<script>

	var btn = document.getElementById("myBtn");
	btn.onclick = function() {
        modal.style.display = "block";
    }

	function openModal(){
		document.getElementById("modal").style.display="block";
	}
  
	var span = document.getElementsByClassName("close1")[0];
	// Cuando el usuario haga click en <span> (x), cierra el modal
		span.onclick = function() {
      modal.style.display = "none";
    }

	window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

</script>

<script src="../../js/eventos/usuario/usuarios_admin.js"></script>

<?php include('../master/script.php') ?>