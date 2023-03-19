let idTabla = 0;

const btnGuardar = document.getElementById("btn_guardar");

btnGuardar.addEventListener("click", async (e) => {
    e.preventDefault();

    const title = document.getElementById("title").value;
    const description = document.getElementById("description").value;
    const date_proyect = document.getElementById("date").value;
    const status = "A";
    const date_creation = new Date();
    const user_creation = "ALCAMPOVERDE";
    const user_sesion = new Date();

    // Verificamos que todos los datos hayan sido ingresados
    if (title === '' || description === '' || date_creation === '') {
        alert('Debe ingresar todos los datos');
        return;
    }

    // Convertimos la imagen a una cadena Base64
    const fileInput = document.getElementById("file");
    const file = fileInput.files[0];
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = function () {
        const url_image = reader.result;

        let parametros = JSON.stringify({
            title: title,
            url_image: url_image,
            description: description,
            date_proyect: date_proyect,
            date_creation: date_creation,
            status: status,
            user_sesion: user_sesion,
            user_creation: user_creation
        });

        fetch('http://localhost/ApiFundacionDabyc/controllers/proyectos', {
            method: 'POST',
            headers: {
                'accept': 'application/json ',
                'Content-Type': 'application/json'
            },
            body: parametros
        })
            .then(response => {
                if (response.status == 200) {
                    alert('exito al guardar, refresque pantalla o presione F5 para poder previsualizar los cambios');
                    limpiarCampos();
                    location.reload();
                }
            })
            .catch(error => console.log(error));
    }
});


const btnEditar = document.getElementById("btn_editar");
btnEditar.addEventListener("click", async (e) => {
    e.preventDefault();
    const id_project = document.getElementById("txt_id_proyect").value;
    const title = document.getElementById("title1").value;
    const description = document.getElementById("description1").value;
    const date_proyect = document.getElementById("date1").value;
    const date_update = new Date();
    const user_sesion = "ALCAMPOVERDE";
    const user_update = "ALCAMPOVERDE";
    
    if (title === '' || description === '' || date_proyect === '') {
        alert('Debe ingresar todos los datos');
        return;
    }
    const fileInput = document.getElementById("file1");
    const file = fileInput.files[0];
    if (file && file instanceof Blob) {
      const reader = new FileReader();
      reader.readAsDataURL(file);
      reader.onload = function () {
        const url_image = reader.result;
        let parametros = JSON.stringify({
            id_project: id_project,
            title: title,
            date_proyect: date_proyect,
            description: description,
            date_update: date_update,
            user_sesion: user_sesion,
            user_update: user_update,
            url_image: url_image,
        });
        fetch('http://localhost/ApiFundacionDabyc/controllers/proyectos', {
            method: 'PUT',
            headers: {
                'accept': 'application/json ',
                'Content-Type': 'application/json'
            },
            body: parametros
        })
            .then(response => {
                if (response.status == 200) {
                    alert('exito al guardar, refresque pantalla o presione F5 para poder previsualizar los cambios');
                    limpiarCampos();
                    location.reload();
                }
            })
            .catch(error => console.log(error));
      }
    } else {
        alert('Archivo seleccionado no válido o vacio');
    }
});





const btnInactivar = document.getElementById("btn_inactivar");
btnInactivar.addEventListener("click", async (e) => {
    e.preventDefault();//

    alert("Inactivar");
    const id_project = document.getElementById("txt_id_proyect").value;

    /*  const user_update = "ALCAMPOVERDE";
     const usur_creation = "ALCAMPOVERDE"; */
    if (id_project == "") {
        alert('El proyecto no existe');
        return;
    }
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
            { data: 'date_proyect' },
            { data: 'date_creation' },
            { data: 'date_update' },
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
            document.getElementById("txt_id_proyect").value = "";
            document.getElementById("title1").value = "";
            document.getElementById("description1").value = "";
            document.getElementById("date1").value = "";
        } else {
            let cellData = $('#' + tabla).DataTable().row($(this)).data();

            idTabla = cellData.id_project;
            document.getElementById("txt_id_proyect").value = cellData.id_project;
            document.getElementById("title1").value = cellData.title;
            document.getElementById("description1").value = cellData.description;
            document.getElementById("date1").value = cellData.date_proyect;

        }

    });
}


window.onload = () => { getData(); };


const limpiarCampos = _ => {
    document.getElementById("title1").value = " ";
    document.getElementById("description1").value = " ";
    document.getElementById("date1").value = " ";
}
