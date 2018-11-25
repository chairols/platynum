$(document).ready(function () {
    var buttonCommon = {
        exportOptions: {
            format: {
                body: function (data, row, column, node) {
                    // Strip $ from salary column to make it numeric
                    return column === 5 ?
                            data.replace(/[$,]/g, '') :
                            data;
                }
            }
        }
    };
    $("#example").DataTable({
        "language": {
            "url": "/assets/vendors/DataTables-1.10.18/spanish.json"
        },
        dom: 'Bfrtip',
        buttons: [
            $.extend(true, {}, buttonCommon, {
                extend: 'copyHtml5'
            }),
            $.extend(true, {}, buttonCommon, {
                extend: 'excelHtml5'
            }),
            $.extend(true, {}, buttonCommon, {
                extend: 'pdfHtml5'
            })
        ]
    });

});
