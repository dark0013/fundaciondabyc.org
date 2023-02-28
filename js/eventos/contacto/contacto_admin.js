let idTabla = 0;




const btnEnviarMensaje = document.getElementById("btn_Enviar_Mensaje");

btnEnviarMensaje.addEventListener("click", async (e) => {
    e.preventDefault();//
    const nombre_completo = document.getElementById("txt_nombre_completo").value;
    const correo_Electronico = document.getElementById("txt_correo_electronico").value;
    const numero_telefonico = document.getElementById("txt_numero_telefonico").value;
    const mensaje.getElementById("txt_mensaje").value;
    

    let parametros = JSON.stringify({ name_users, id_rol, identification_card, name, pass, user_sesion, usur_creation });

    console.log(parametros);

    let data = await fetch('http://localhost/ApiFundacionDabyc/controllers/usuario', {
        method: 'POST',
        headers: {
            'accept': 'application/json ',
            'Content-Type': 'application/json'
        },
        body: parametros
    })

    if (data.status == 200) {
        alert('exito al guardar, refresque pantalla o presione F5 para poder previsualizar los cambios');
        limpiarCampos();
        location.reload();
    }

});



const btnEditar = document.getElementById("btn_editar");
btnEditar.addEventListener("click", async (e) => {
    e.preventDefault();//
    const id_user = document.getElementById("txt_id_user").value;
    const name_users = document.getElementById("txt_nombre_user").value;
    const id_rol = document.getElementById("txt_rol").value;
    const identification_card = document.getElementById("txt_cedula").value;
    const name = document.getElementById("txt_nombre").value;
    const pass = document.getElementById("txt_contrasenia").value;
    const user_update = "ALCAMPOVERDE";
    const usur_creation = "ALCAMPOVERDE";

    let parametros = JSON.stringify({ id_user, name_users, id_rol, identification_card, name, pass, user_update, usur_creation });

    console.log(parametros);

    let data = await fetch('http://localhost/ApiFundacionDabyc/controllers/usuario', {
        method: 'PUT',
        headers: {
            'accept': 'application/json ',
            'Content-Type': 'application/json'
        },
        body: parametros
    })

    if (data.status == 200) {
        alert('exito al guardar, refresque pantalla o presione F5 para poder previsualizar los cambios');
        limpiarCampos();
        location.reload();
    }

});




const btnInactivar = document.getElementById("btn_inactivar");
btnInactivar.addEventListener("click", async (e) => {
    e.preventDefault();//

    alert("Inactivar");
    const id_user = document.getElementById("txt_id_user").value;

    /*  const user_update = "ALCAMPOVERDE";
     const usur_creation = "ALCAMPOVERDE"; */

    let parametros = JSON.stringify({ id_user });

    console.log(parametros);

    let data = await fetch('http://localhost/ApiFundacionDabyc/controllers/usuario', {
        method: 'DELETE',
        headers: {
            'accept': 'application/json ',
            'Content-Type': 'application/json'
        },
        body: parametros
    })

    if (data.status == 200) {
        alert('exito al guardar, refresque pantalla o presione F5 para poder previsualizar los cambios');
        limpiarCampos();
        location.reload();

    }

});




const form = document.getElementById('contactForm');

form.addEventListener('submit', (event) => {
  event.preventDefault(); // Evita que el formulario se envíe de manera predeterminada

  const formData = new FormData(form); // Crea un objeto FormData con los datos del formulario

  fetch('sendemail.php', {
    method: 'POST',
    body: formData // Envía los datos al archivo PHP mediante el método POST
  })
  .then(response => {
    if (response.ok) {
      console.log('Datos enviados correctamente');
    } else {
      throw new Error('Error al enviar los datos');
    }
  })
  .catch(error => {
    console.error(error);
  });
});
