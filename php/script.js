let dataTable;
let dataTableIsInitialized = false;

let dataTableOptions = {
  dom: 'Bfrtilp',
  buttons: [
    {
      extend: 'excelHtml5',
      text: '<i class="fas fa-file-excel"></i> ',
      titleAttr: 'Exportar a Excel',
      className: 'btn btn-success',
    },
    {
      extend: 'pdfHtml5',
      text: '<i class="fas fa-file-pdf"></i> ',
      titleAttr: 'Exportar a PDF',
      className: 'btn btn-danger',
    },
    {
      extend: 'print',
      text: '<i class="fa fa-print"></i> ',
      titleAttr: 'Imprimir',
      className: 'btn btn-info',
    },
  ],
  lengthMenu: [5, 10, 15, 20, 100],
  columnDefs: [
    { className: 'centered', targets: [0, 1, 2, 3, 4, 5] },
    { orderable: false, targets: [2] },
    { searchable: false, targets: [1] },
    { width: '300%', targets: [9,10,11] },
  ],
  pageLength: 3,
  destroy: true,
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-CO.json',
    },
};

$(document).ready(function () {
  $('#example').DataTable(dataTableOptions);

});