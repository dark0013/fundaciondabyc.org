<?php include('../master/header.php') ?>

<link rel="stylesheet" href="../../css/proyecto.css">
<?php include('../master/navbar.php') ?>

<setion class="home-section">
  <div class="home-content">
    <i class='bx bx-menu'></i>
  </div>
  <section>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left:35px; margin-top:30px">Agregar Proyecto</button>

    <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Insertar Datos </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container">
              <form enctype="multipart/form-data">
                <input type="hidden" id="txt_id_proyect">
                <label for="title">Titulo:</label>
                <input type="text" id="title" name="title" placeholder="Título..">
                <label for="date">Fecha:</label>
                <input type="date" id="date" name="date" placeholder="Fecha..">
                <label for="description">Descripción:</label>
                <textarea id="description" name="description" placeholder="Descripción.." style="height:200px"></textarea>
                <label for="file">Archivo:</label>
                <input type="file" id="file" name="file" placeholder="Archivo..">
                <label for="video_link">Link reels:</label>
                <input type="text" id="video_link" name="video_link" placeholder="Link..">
              </form>
              <div class="modal-footer" id="modalfoot">
                <input type="button" id="btn_guardar" value="Guardar" class="input1">
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <section>
      <div class="modal"  id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content"><div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Datos </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container">
              <form enctype="multipart/form-data">
                <input type="hidden" id="txt_id_proyect">
                <label for="title">Titulo:</label>
                <input type="text" id="title1" name="title" placeholder="Título..">
                <label for="date">Fecha:</label>
                <input type="datetime" id="date1" name="date" placeholder="Fecha..">
                <label for="description">Descripción:</label>
                <textarea id="description1" name="description" placeholder="Descripción.." style="height:200px"></textarea>
                <label for="file">Archivo:</label>
                <div class="">
                  <img style="width: 50%;" id="image1" src="" alt="Imagen seleccionada">
                </div>
                <label for="video_link1">Link reels:</label>
                <input type="text" id="video_link1" name="video_link1" placeholder="Link..">
                <br>
                <input type="file" id="file1" name="image1" placeholder="Archivo.." onchange="previewImage();" value="{{ cellData.url_image }}">
                <input type="hidden" id="file1_hidden" name="image1">
              </form> 
              <div class="modal-footer" id="modalfoot">
                <input type="button" id="btn_editar" value="ACTUALIZAR" class="input1">
                <input type="button" id="btn_inactivar" value="Inactivar" class="input1">
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>
    

  <section id="tabla">
    <table id="tblDatos" class="table table-striped table-bordered" style="width: 100%" onclick="openModal()" data-bs-toggle="modal" data-bs-target="#exampleModal1">
      <thead>
        <tr>
          <th>#</th>
          <th>Titulo</th>
          <th>Imagen</th>
          <th>Descripcion</th>
          <th>Fecha de proyecto</th>
          <th>Fecha de Creacion</th>
          <th>Fecha de Actualización</th>
          <th>Estado</th>
        </tr>
      </thead>
    </table>
  </section>

</setion>

<script>
  function openModal() {
    document.getElementById("exampleModal1").style.display = "block";
  }
</script>


<script src="../../js/eventos/proyecto/proyecto_admin.js"></script>
<?php include('../master/script.php') ?>