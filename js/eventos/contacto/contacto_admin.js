let idTabla = 0;


const btnENVIARMENSAJE = document.getElementById("btn_Enviar_Mensaje");

btnEnviarMensaje.addEventListener("click", async (e) => {
    e.preventDefault();//
    const identification_card = document.getElementById("txt_cedula").value;
    const full_name = document.getElementById("txt_nombre_completo").value;
    const email = document.getElementById("txt_correo_electronico").value;
    const phone = document.getElementById("txt_numero_telefonico").value;
    const address = document.getElementById("txt_direccion").value;
    const description = document.getElementById("txt_escribe_tu_mensaje").value;
    const user_sesion = "ALCAMPOVERDE";
    const usur_creation = "ALCAMPOVERDE";

    let parametros = JSON.stringify({ identification_card, full_name,
         email,phone,direccion,address,description,user_sesion,usur_creation });

    console.log(parametros);

    let data = await fetch('http://localhost/ApiFundacionDabyc/controllers/contactos', {
        method: 'POST',
        headers: {
            'accept': 'application/json ',
            'Content-Type': 'application/json'
        },
        body: parametros
    })

    if (data.status == 200) {
        alert('EXITO al guardar, refresque pantalla o presione F5 para poder previsualizar los cambios');
        limpiarCampos();
        location.reload();
    }

});

const btnSUBSCRIBIRSE = document.getElementById("btn_subscrubirse");

btnSUBSCRIBIRSE.addEventListener("click", async (e) => {
    e.preventDefault();//
    const identification_card = document.getElementById("txt_cedula").value;
    const full_name = document.getElementById("txt_nombre_completo").value;
    const email = document.getElementById("txt_correo_electronico").value;
    const phone = document.getElementById("txt_numero_telefonico").value;
    const address = document.getElementById("txt_direccion").value;
    const description = document.getElementById("txt_escribe_tu_mensaje").value;
    const user_sesion = "ALCAMPOVERDE";
    const usur_creation = "ALCAMPOVERDE";

    let parametros = JSON.stringify({ identification_card, full_name,
         email,phone,direccion,address,description,user_sesion,usur_creation });

    console.log(parametros);

    let data = await fetch('http://localhost/ApiFundacionDabyc/controllers/contactos', {
        method: 'POST',
        headers: {
            'accept': 'application/json ',
            'Content-Type': 'application/json'
        },
        body: parametros
    })

    if (data.status == 200) {
        alert('EXITO al guardar, refresque pantalla o presione F5 para poder previsualizar los cambios');
        limpiarCampos();
        location.reload();
    }

});