let idTabla = 0;

const btnGuardar = document.getElementById("btn_guardar");

btnGuardar.addEventListener("click", async (e) => {
    e.preventDefault();//
    const title= document.getElementById("title").value;
    const url_image = document.getElementById("file").value;
    const description= document.getElementById("description").value;
    const date_creation= document.getElementById("date").value;
    const status = "A";
    const user_creation = "ALCAMPOVERDE";
    const user_sesion = new Date();
    
    // Verificamos que todos los datos hayan sido ingresados
    if(title === '' || url_image === '' || description === '' || date_creation === '') {
        alert('Debe ingresar todos los datos');
        return;
    }
    
    let parametros = JSON.stringify({ title,url_image,description,date_creation,status, user_sesion, user_creation,});

    console.log(parametros);

    let data = await fetch('http://localhost/ApiFundacionDabyc/controllers/proyectos', {
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
    const id_project  = document.getElementById("txt_id_proyect").value;
    const title= document.getElementById("title1").value;
    const url_image = document.getElementById("file1").value;
    const description= document.getElementById("description1").value;
    const date_creation= document.getElementById("date1").value;
    const user_sesion = new Date();
    const user_update = new Date();

    let parametros = JSON.stringify({ id_project,title,url_image,description,date_creation, user_sesion, user_update});

    console.log(parametros);

    let data = await fetch('http://localhost/ApiFundacionDabyc/controllers/proyectos', {
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
    const id_project= document.getElementById("txt_id_proyect").value;

    /*  const user_update = "ALCAMPOVERDE";
     const usur_creation = "ALCAMPOVERDE"; */

    let parametros = JSON.stringify({ id_project });

    console.log(parametros);

    let data = await fetch('http://localhost/ApiFundacionDabyc/controllers/proyectos', {
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
    const data = await fetch('http://localhost/ApiFundacionDabyc/controllers/proyectos?page');
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
            { data: 'id_project' },
            { data: 'title' },
            { data: 'url_image' },
            { data: 'description' },
            { data: 'date_creation' },
            { data: 'status' },
            
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
            document.getElementById("txt_id_proyect").value="";
            document.getElementById("title1").value="";
            document.getElementById("description1").value="";
            document.getElementById("date1").value="";
        } else {
            let cellData = $('#' + tabla).DataTable().row($(this)).data();

            idTabla = cellData.id_project;
            document.getElementById("txt_id_proyect").value= cellData.id_project;
            document.getElementById("title1").value = cellData.title;
            document.getElementById("description1").value = cellData.description;
            document.getElementById("date1").value = cellData.date_creation;

        }

    });
}


window.onload = () => { getData(); };


const limpiarCampos = _ => {
    document.getElementById("title1").value = " ";
    document.getElementById("description1").value = " ";
    document.getElementById("date1").value = " ";
}
