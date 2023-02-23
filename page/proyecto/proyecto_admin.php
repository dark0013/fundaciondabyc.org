<?php include('../master/header.php') ?>

<?php include('../master/navbar.php') ?>

<setion class="home-section">
    <div class="home-content">
        <i class='bx bx-menu'></i>
    </div>
    <div class="container">

        <h1 class="text-center" style="margin-bottom: 50px;">Publicacion de Proyecto DABYC</h1>

        
        <form Class="mt-4">
            <input placeholder="Introduzca un titulo" type="text" id="task" name="task">
            <br><br>
            <input type="date" name="day">
            <br><br>
            <textarea style="width:50%; resize: none;" rows="10" weight="20" placeholder="Introduzca la descripción" id="txt_descripcion" ></textarea>
            <br><br>
            <label for="file">Subir foto:</label>
            <input type="file" id="file" name="file">
            <br><br>
            <button type="submit">Enviar</button>
        </form>

    </div>
</setion>

<script src="../../js/eventos/proyecto/proyecto_admin.js"></script>
<?php include('../master/script.php') ?>