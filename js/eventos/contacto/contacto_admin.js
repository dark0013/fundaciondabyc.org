let idTabla = 0;


const btnENVIARMENSAJE = document.getElementById("btn_Enviar_Mensaje");

btnENVIARMENSAJE.addEventListener("click", async (e) => {
    e.preventDefault();//
    /*const dia = fechaActual.getDate();
    const mes = fechaActual.getMonth() + 1;
    const anio = fechaActual.getFullYear();
    const date_creation = `${anio}-${mes}-${dia}`;*/
    const indentication = "*******";
    const full_name = document.getElementById("txt_nombre_completo").value;
    const phone = document.getElementById("txt_numero_telefonico").value;
    const email = document.getElementById("txt_correo_electronico").value;
    const description = document.getElementById("txt_escribe_tu_mensaje").value;
    const status = document.getElementById("txt_status").value;
    const user_sesion = new Date();
    const date_creation = new Date();
    const user_creation = "ADMIN";
    let parametros = JSON.stringify({ indentication, full_name, phone, email, description, status, user_sesion, date_creation, user_creation });

    console.log(parametros);

    let data = await fetch(`${window.location.origin}/ApiFundacionDabyc/controllers/contactos`, {
        method: 'POST',
        headers: {
            'accept': 'application/json ',
            'Content-Type': 'application/json'
        },
        body: parametros
    })

    if (data.status == 200) {
        alert('EXITO al guardar, refresque pantalla o presione F5 para poder previsualizar los cambios');
        limpiarCampos2();
        location.reload();
    }

});

const btnSUBSCRIBIRSE = document.getElementById("btn_subscribirse");

btnSUBSCRIBIRSE.addEventListener("click", async (e) => {
    e.preventDefault();//
    const indentication = document.getElementById("txt_cedula").value;
    const full_name = document.getElementById("txt_nombre_completoS").value;
    const email = document.getElementById("txt_correo_electronicoS").value;
    const phone = document.getElementById("txt_numero_telefonicoS").value;
    const address = document.getElementById("txt_escribe_tu_mensajeS").value;
    const status = document.getElementById("txt_statu").value;
    const user_sesion = new Date();
    const date_creation = new Date();
    const user_creation = "ADMIN";

    let parametros = JSON.stringify({
        indentication, full_name,
        email, phone, address, status, user_sesion, user_creation,date_creation
    });

    console.log(parametros);

    let data = await fetch(`${window.location.origin}/ApiFundacionDabyc/controllers/contactos`, {
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

const limpiarCampos = _ => {
    document.getElementById("txt_cedula").value = " ";
    document.getElementById("txt_nombre_completo").value = " ";
    document.getElementById("txt_correo_electronico").value = " ";
    document.getElementById("txt_numero_telefonico").value = " ";
    document.getElementById("txt_escribe_tu_mensaje").value = " ";

}

const limpiarCampos2 = _ => {
    document.getElementById("txt_cedula").value = " ";
    document.getElementById("txt_nombre_completo").value = " ";
    document.getElementById("txt_correo_electronico").value = " ";
    document.getElementById("txt_numero_telefonico").value = " ";
    document.getElementById("txt_escribe_tu_mensaje").value = " ";

}