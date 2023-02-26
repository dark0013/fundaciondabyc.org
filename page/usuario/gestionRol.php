<?php include('../master/header.php') ?>

<?php include('../master/navbar.php') ?>

<setion class="home-section">
  <div class="home-content">
    <i class='bx bx-menu'></i>
  </div>

  <button id="myBtn">Agregar Rol <i class="fa-solid fa-user-plus"></i></button>
  <div id="myModal" class="modal">
    <div class="modal-content1">
    <span class="close1">&times;</span>
      
      <div class="row">
        <!-- No tocar las id -->
        <form>
          <!-- Favor no eliminar ni modificasr este campo esta oculto -->
          <h1 style="text-align:center">Ingrese los Datos</h1>
          <input type="hidden" class="form-control" id="txt_id_rol">
            
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Rol de Usuario</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="txt_rol" class="inputform">
            </div>
          </div><br>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Codigo de Rol</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="txt_cod" class="inputform">
            </div>
          </div><br>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nombre de usuario</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="txt_name" class="inputform">
            </div>
          </div><br>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="txt_status" class="inputform">
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
      

    <table id="tblDatos" class="table table-striped table-bordered" style="width: 100%">
      <thead>
        <tr>
          <th>id_rol</th>
          <th>rol_users</th>
          <th>cod_rol</th>
          <th>user_name</th>
          <th>status</th>
          <th>date_creation</th>
        </tr>
      </thead>
    </table>
  </div>



</setion>

<script>
    //Selección del botón para abrir la ventana modal
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close1")[0];


    //Abrir la ventana modal al hacer clic en el botón
    btn.onclick = function() {
        modal.style.display = "block";
    }

    //Cerrar la ventana modal al hacer clic fuera de la misma
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // Cuando el usuario haga click en <span> (x), cierra el modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    </script>

    <script src="../../js/eventos/rol/rol_admin.js"></script>

<?php include('../master/script.php') ?>

