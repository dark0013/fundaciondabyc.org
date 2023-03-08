let idTabla = 0;




const btnGuardar = document.getElementById("btn_guardar");

btnGuardar.addEventListener("click", async (e) => {
    e.preventDefault();//
    const name_users = document.getElementById("txt_nombre_user").value;
    const id_rol = document.getElementById("txt_rol").value;
    const identification_card = document.getElementById("txt_cedula").value;
    const name = document.getElementById("txt_nombre").value;
    const status = "A";
    const pass = document.getElementById("txt_contrasenia").value;
    const user_sesion = "ALCAMPOVERDE";
    const usur_creation = "ALCAMPOVERDE";
    let parametros = JSON.stringify({ name_users, id_rol, identification_card, name, status ,pass, user_sesion, usur_creation });

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
    const name_users = document.getElementById("txt_nombre_user1").value;
    const id_rol = document.getElementById("txt_rol1").value;
    const identification_card = document.getElementById("txt_cedula1").value;
    const name = document.getElementById("txt_nombre1").value;
    const pass = document.getElementById("txt_contrasenia1").value;
    const user_update = "ALCAMPOVERDE";
    const user_creation = "ALCAMPOVERDE";

    let parametros = JSON.stringify({ id_user, name_users, id_rol, identification_card, name, pass, user_update, user_creation });

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






























const getData = async () => {
    const data = await fetch('http://localhost/ApiFundacionDabyc/controllers/usuario?page');
    console.log(data);
    if (data.status === 200) {
        const datos = await data.json();
        console.log(datos);
        llenarTabla("tblDatos", datos)
    }
}


function llenarTabla(tabla, filas) {
    $('#' + tabla + ' tbody').remove();
    $('#' + tabla).dataTable().fnDestroy();
    $('#' + tabla).DataTable({
        language: {
            search: "Buscar",
            info: "Total: _TOTAL_ registros. ",
            emptyTable: "No hay información.",
            infoEmpty: "Total: 0 registros.",
            infoFiltered: "(filtrado de un total de _MAX_ registros)",
            select: { rows: " %d filas seleccionadas." }
        },
        select: true,
        scrollY: 300,
        scrollX: true,
        scrollCollapse: true,
        paging: false,
        fixedColumns: false,
        data: filas,
        columns: [
            { data: 'id_user' },
            { data: 'name_users' },
            { data: 'identification_card' },
            { data: 'pass' },
            { data: 'name' },
            { data: 'id_rol' },
            { data: 'status' },
            { data: 'status' },
            { data: 'date_creation' },
        ],
        columnDefs: [{
            targets: [], //OCULTAR COLUMNAS
            visible: false,
            searchable: true
        }]
    });

    //MANEJO DE EVENTO DE LA TABLA
    $('#' + tabla + ' tbody').on('click', 'tr', function () {

        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
            document.getElementById("txt_id_user").value = "";
            document.getElementById("txt_nombre_user1").value = "";
            document.getElementById("txt_rol1").value = "";
            document.getElementById("txt_cedula1").value = "";
            document.getElementById("txt_nombre1").value = "";
            document.getElementById("txt_contrasenia1").value = "";
        } else {
            let cellData = $('#' + tabla).DataTable().row($(this)).data();

            idTabla = cellData.id_user;
            document.getElementById("txt_id_user").value = cellData.id_user;
            document.getElementById("txt_nombre_user1").value = cellData.name_users;
            document.getElementById("txt_rol1").value = cellData.id_rol;
            document.getElementById("txt_cedula1").value = cellData.identification_card;
            document.getElementById("txt_nombre1").value = cellData.name;
            document.getElementById("txt_contrasenia1").value = cellData.pass;

        }

    });
}


window.onload = () => { getData(); };



const limpiarCampos = _ => {
    document.getElementById("txt_id_user").value = " ";
    document.getElementById("txt_nombre_user").value = " ";
    document.getElementById("txt_rol").value = " ";
    document.getElementById("txt_cedula").value = " ";
    document.getElementById("txt_nombre").value = " ";
    document.getElementById("txt_contrasenia").value = " ";
}

const limpiarCampos1 = _ => {
    document.getElementById("txt_id_user").value = " ";
    document.getElementById("txt_nombre_user1").value = " ";
    document.getElementById("txt_rol1").value = " ";
    document.getElementById("txt_cedula1").value = " ";
    document.getElementById("txt_nombre1").value = " ";
    document.getElementById("txt_contrasenia1").value = " ";
}