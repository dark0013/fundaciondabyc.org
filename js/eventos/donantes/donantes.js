let idTabla = 0;

const getData = async () => {
    //const data = await fetch(`${window.location.origin}/ApiFundacionDabyc/controllers/donaciones?page`);
    const data = await fetch('http://localhost/ApiFundacionDabyc/controllers/donaciones?page');
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
            { data: 'id_donacion' },
            { data: 'nombres_apellidos' },
            { data: 'cedula' },
            { data: 'type_products' },
            { data: 'quantity' },
            { data: 'description' },
            { data: 'status' },
            { data: 'date_creation' },

        ],
        columnDefs: [{
            targets: [], //OCULTAR COLUMNAS
            visible: false,
            searchable: true
        }]
    });  
}
window.onload = () => { getData(); };