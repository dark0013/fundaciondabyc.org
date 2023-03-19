let idTabla = 0;




const btnGuardar = document.getElementById("btn_guardar");

btnGuardar.addEventListener("click", async (e) => {
    e.preventDefault();//
    const rol_user= document.getElementById("txt_nombreRolUser").value;
    const cod_rol= document.getElementById("txt_codRol").value;
    const user_name= document.getElementById("txt_nameUser").value;
    const status= document.getElementById("txt_estado").value;
    const user_sesion = new Date();
    const date_creation = new Date();  
    const user_creation= "Jordan";

    if (rol_user == "" || cod_rol == "" || user_name == "" || status == "") {
        alert('Debe ingresar todos los datos');
        return;
    }
    let parametros = JSON.stringify({rol_user,cod_rol,user_name,status,user_sesion,user_creation ,date_creation});

    console.log(parametros);

    let data = await fetch('http://localhost/ApiFundacionDabyc/controllers/rol', {
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
    const id_rol= document.getElementById("txt_id_user").value;
    const rol_user = document.getElementById("txt_nombreRolUser").value;
    const cod_rol = document.getElementById("txt_codRol").value;
    const user_name = document.getElementById("txt_nameUser").value;
    const status = document.getElementById("txt_estado").value;
    const user_sesion = new Date();
    const user_update = new Date();
    const user_creation = "Jordan";

    if (rol_user == "" || cod_rol == "" || user_name == "" || status == "") {
        alert('Debe ingresar todos los datos');
        return;
    }
    let parametros = JSON.stringify({ id_rol, rol_user, cod_rol, user_name, status , user_sesion,user_creation,user_update });

    console.log(parametros);

    let data = await fetch('http://localhost/ApiFundacionDabyc/controllers/rol', {
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
    const id_rol= document.getElementById("txt_id_user").value;

    /*  const user_update = "ALCAMPOVERDE";
     const usur_creation = "ALCAMPOVERDE"; */
    if (id_rol == "") {
        alert('El rol no existe');
        return;
    }
    let parametros = JSON.stringify({ id_rol });

    console.log(parametros);

    let data = await fetch('http://localhost/ApiFundacionDabyc/controllers/rol', {
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
    const data = await fetch('http://localhost/ApiFundacionDabyc/controllers/rol?page');
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
            { data: 'id_rol' },
            { data: 'rol_user' },
            { data: 'cod_rol' },
            { data: 'user_name' },
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
            document.getElementById("txt_nombreRolUser").value = "";
            document.getElementById("txt_codRol").value = "";
            document.getElementById("txt_nameUser").value = "";
            document.getElementById("txt_estado").value = "";
            
        } else {
            let cellData = $('#' + tabla).DataTable().row($(this)).data();

            idTabla = cellData.id_rol;
            document.getElementById("txt_id_user").value = cellData.id_rol;
            document.getElementById("txt_nombreRolUser").value = cellData.rol_user;
            document.getElementById("txt_codRol").value = cellData.cod_rol;
            document.getElementById("txt_nameUser").value = cellData.user_name;
            document.getElementById("txt_estado").value = cellData.status;
            

        }

    });
}


window.onload = () => { getData(); };



const limpiarCampos = _ => {
    document.getElementById("txt_nombreRolUser").value = " ";
    document.getElementById("txt_codRol").value = " ";
    document.getElementById("txt_nameUser").value = " ";
    document.getElementById("txt_estado").value = " ";
   
}
