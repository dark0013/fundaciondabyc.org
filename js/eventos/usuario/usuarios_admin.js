let idTabla = 0;

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
            { data: 'name' },
            { data: 'id_rol' },
            { data: 'status' }
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
        } else {
            let cellData = $('#' + tabla).DataTable().row($(this)).data();

           // idTabla = cellData.ID;


        }

    });
}


window.onload = () => { getData(); }; 

/*

actualizar.addEventListener('click', async (e) => {
    e.preventDefault();

    let id = document.getElementsByName('id')[0].value;
    const titulo = document.getElementsByName('titulo')[0].value;
    const descripcion = document.getElementsByName('descripcion')[0].value;
    const autor = document.getElementsByName('autor')[0].value;


    console.log(JSON.stringify({ id, titulo, descripcion, autor }));

    let data = await fetch('http://localhost/MediumBlogApi/controllers/Blog', {
        method: 'PUT',
        headers: {
            'accept': 'application/json ',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ id, titulo, descripcion, autor })
    })

    if (data.status === 200) {
        alert('exito al actualizar, refresque pantalla o presione F5 para poder previsualizar los cambios')
    }



})

function posicion(id) {
    fetch('http://localhost/MediumBlogApi/controllers/Blog?page=1')
        .then(response => response.json())
        .then(data => {
            for (let valor of data) {
                if (valor.id == id) {
                    //console.log(valor)
                    let id = document.getElementsByName('id')[0].value = valor.id;
                    let titulo = document.getElementsByName('titulo')[0].value = valor.titulo;
                    let descripcion = document.getElementsByName('descripcion')[0].value = valor.descripcion;
                    let autor = document.getElementsByName('autor')[0].value = valor.autor;
                }
            }

        });
}

function Modificar(id) {
    posicion(id)

}

const Eliminar = async (valor) => {
    list = { "id": valor };
    let data = await fetch('http://localhost/MediumBlogApi/controllers/Blog', {
        method: 'DELETE',
        headers: {
            'accept': 'application/json ',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(list)
    })

    if (data.status == 200) {
        alert('exito al Eliminar, refresque pantalla o presione F5 para poder previsualizar los cambios')
    }

    //extrarDatos();
}




*/