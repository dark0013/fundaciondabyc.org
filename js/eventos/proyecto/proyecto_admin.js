let idTabla = 0;

const btnGuardar = document.getElementById("btn_guardar");

btnGuardar.addEventListener("click", async (e) => {
    e.preventDefault();
    const title = document.getElementById("title").value;
    const description = document.getElementById("description").value;
    const date_proyect = document.getElementById("date").value;
    const video_link = document.getElementById("video_link").value;
    const status = "S";
    const date_creation = new Date();
    const user_creation = "ADMIN";
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
            video_link:video_link,
            description: description,
            date_proyect: date_proyect,
            date_creation: date_creation,
            status: status,
            user_sesion: user_sesion,
            user_creation: user_creation
        });

        //fetch(`${window.location.origin}/ApiFundacionDabyc/controllers/proyectos`, {
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
    const video_link = document.getElementById("video_link1").value;
    const date_proyect = document.getElementById("date1").value;
    const date_update = new Date();
    const user_sesion = "ADMIN";
    const user_update = "ADMIN";

    if (title === '' || description === '' || date_proyect === '') {
        alert('Debe ingresar todos los datos');
        return;
    }
    const fileInput = document.getElementById("file1");
    const file = fileInput.files[0];
    if (fileInput.value !== '') {
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function () {
            const url_image = reader.result;
            let parametros = JSON.stringify({
                id_project: id_project,
                title: title,
                video_link:video_link,
                date_proyect: date_proyect,
                description: description,
                date_update: date_update,
                user_sesion: user_sesion,
                user_update: user_update,
                url_image: url_image,
            });
            //fetch(`${window.location.origin}/ApiFundacionDabyc/controllers/proyectos`, {
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
                    }else{
                      alert('Error al momento de actualizar');
                      }
                })
                .catch(error => console.log(error));
        }
    } else {
        const image = document.getElementById("image1");
        const url_image = image.src;
        /*const image_name = url_image.split('/').pop(); // Obtenemos solo el nombre de la imagen
        const ext = image_name.split('.').pop(); // Obtenemos la extensión de la imagen
        const url_without_ext = url_image.substring(0, url_image.lastIndexOf('.')); // Quitamos la extensión de la URL
        const url_with_ext = url_without_ext + '.' + ext; // Agregamos la extensión a la URL*/
        let parametros = JSON.stringify({
            id_project: id_project,
            video_link:video_link,
            title: title,
            date_proyect: date_proyect,
            description: description,
            date_update: date_update,
            user_sesion: user_sesion,
            user_update: user_update,
            url_image: encodeURIComponent(url_image),
        });
        //fetch(`${window.location.origin}/ApiFundacionDabyc/controllers/proyectos`, {
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
                    console.log(response)
                }else{
                     alert('Error al momento de actualizar');
                }
            })
            .catch(error => console.log(error));
    }


});





const btnInactivar = document.getElementById("btn_inactivar");
btnInactivar.addEventListener("click", async (e) => {
    e.preventDefault();//

    const id_project = document.getElementById("txt_id_proyect").value;

    /*  const user_update = "ALCAMPOVERDE";
     const usur_creation = "ALCAMPOVERDE"; */
    if (id_project == "") {
        alert('El proyecto no existe');
        return;
    }
    let parametros = JSON.stringify({ id_project });

    console.log(parametros);

    //let data = await fetch(`${window.location.origin}/ApiFundacionDabyc/controllers/proyectos`, {
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

    }else{
         alert('Error al momento de eliminar');
    }

});











const getData = async () => {
    //const data = await fetch(`${window.location.origin}/ApiFundacionDabyc/controllers/proyectos?page`);
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
            document.getElementById("video_link1").value = "";
            document.getElementById("description1").value = "";
            document.getElementById("date1").value = "";
        } else {
            let cellData = $('#' + tabla).DataTable().row($(this)).data();

            idTabla = cellData.id_project;
            document.getElementById("txt_id_proyect").value = cellData.id_project;
            document.getElementById("title1").value = cellData.title;
            document.getElementById("description1").value = cellData.description;
            document.getElementById("video_link1").value = cellData.video_link;
            document.getElementById("date1").value = cellData.date_proyect;
            document.getElementById("image1").src = cellData.url_image; // establecer la fuente de la imagen
        }

    });
}
function previewImage() {
    var preview = document.getElementById("image1");
    var file = document.getElementById("file1").files[0];
    var reader = new FileReader();

    reader.onloadend = function () {
        preview.src = reader.result;
        document.getElementById("file1_hidden").value = reader.result;
    }

    if (file) {
        reader.readAsDataURL(file);
    } else {
        preview.src = "";
    }
}

window.onload = () => { getData(); };


const limpiarCampos = _ => {
    document.getElementById("title1").value = " ";
    document.getElementById("description1").value = " ";
    document.getElementById("date1").value = " ";
    document.getElementById("video_link").value = " ";
}
