<?php include "(../master/header.php)"?>
        
<?php include "(../master/navbar.php)" ?>
        <!--menu-->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu"></ion-icon>
                </div>
            </div>
            <!--formulario-->


            <center>
                <fieldset class="formulario1">

                    <form>
                        <legend class="Datos">Datos Persona :</legend>
                        <br />

                        <label for="nombre" class="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre"
                            required="true" /><br />


                        <label for="Apellidos" class="nombre">Apellido:</label>
                        <input type="text" id="Apellido" name="Apellido" placeholder="Escribe tu apellido"
                            required="true" /><br />

                        <label for="usuario" class="nombre">Usuario:</label>
                        <input type="text" id="usuario" name="usuario" placeholder="Escribe tu Usuario"
                            required="true" /><br />


                        <label for="Contraseña" class="nombre">Contraseña:</label><br />
                        <input type="password" class="contraseña" id="contraseña" name="contraseña"
                            placeholder="Escribe tu contraseña" required="true" /><br />

                        <div>
                            <form action="#">
                                <input type="submit" value="Enviar" class="btn">

                            </form>
                        </div>
                        <br>
                        <div>
                            <a href="/usuario/gestionUsuario.php"><button class="btn"
                                    style="background-color:red;">Salir</button></a>
                        </div>
                        <br />
                    </form>

                </fieldset>
            </center>

<?php include "(../master/script.php)" ?>