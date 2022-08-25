$(document).ready(function() {
    $('#dTable').DataTable( {
        stateSave: true,
        pageLength: 50,
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excel',
                text: '<i class="fa fa-file-excel"></i> Excel',
                className: 'btn btn-success btn-xs'
            },
            {
                extend: 'pdf', text: '<i class="fa fa-file-pdf"></i> PDF',
                className: 'btn btn-warning btn-xs'
            },
            {
                extend: 'print', text: '<i class="fa fa-print"></i> Imprimir',
                className: 'btn btn-danger btn-xs'
            }
            //'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
    } );
} );