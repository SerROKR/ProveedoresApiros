let DataTable;
let DataTableIsInitialized = false;

let dataTableOptions={
    dom: "Bfrtilp",
    buttons: [
        {
            extend: "excelHtml5",
            text: "<i class='fa-regular fa-file-excel'></i>",
            titleAttr: "Exportar a Excel",
            className: 'btn btn-success',
        },
        {
            extend: "pdfHtml5",
            text: "<i class='fa-regular fa-file-pdf'></i>",
            titleAttr: "Exportar a PDF",
            className: 'btn btn-danger',
        },
        {
            extend: "print",
            text: "<i class='fa-solid fa-print'></i>",
            titleAttr: "Imprimir",
            className: 'btn btn-info',
        }
    ],
    lengthMenu: [5, 10, 15, 20, 25],//cantidad de registros a mostrar
    columnDefs: [
        { orderable: false, target: [1, 2, 3] },//bloquear la propiedad de que se ordenen los elementos de acuerdo a las columnas (Target) indicadas
        { serchable: false, target: [0, 1, 2, 4, 5] }, //bloquear las columnas por las cuales no se requiere hacer la consulta
        { width: "20%", target: [1] },//se define el ancho de columnas especificadas en el target   
    ],
    pageLength: 3,//propiedad que permite definir la cantidad de registros que se quieren mostrar al cargar la pagina.

    //Definición del lenguaje en el cual se quiere mostrar la tabla

}

$(document).ready(function () {
    $('#example').DataTable(dataTableOptions);

});

const listUsers = async()=>{
    try{
        const response  = await fetch ("")
    }
}

window.addEventListener("load", async ()=>{
    await listUsers();
})