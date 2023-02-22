<?php include ('../master/header.php')?>
        
<?php include ('../master/navbar.php') ?>

<setion class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
    </div>
    <div class="container">
         
                <center>

                <label>
                    <h1 >Publicacion de Proyecto DABYC</h1>
                </label>

                </center>
                
            
            <br><br>
            <form Class ="mt-4">
                <input placeholder="Introduzca un titulo" type="text" id="task" name="task">
                <br><br>
                <input type="date" name="day">
                <br><br>
                <textarea style= "width:50%"  rows="10" weight="20" placeholder="Introduzca la descripción"></textarea>
                <br><br>
                <label for="file">Subir foto:</label>
                <input type="file" id="file" name="file">
                <br><br>
                <button type="submit">Enviar</button>
            </form>
      
    </div>
</setion>


<?php include ('../master/script.php') ?>