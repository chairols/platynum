$(document).ready(function() {
    gets_tabla();
});

$("#agregar").click(function () {
    datos = {
        'posicion': $("#posicion").val(),
        'contenido': $("#contenido").val(),
        'tabla': 'banners_platynum'
    };
    $.ajax({
        type: 'POST',
        url: '/banners/agregar_ajax/',
        data: datos,
        beforeSend: function () {

        },
        success: function (data) {
            resultado = $.parseJSON(data);
            alertify.set('notifier', 'position', 'top-center');
            if (resultado['status'] == 'error') {
                alertify.error(resultado['data']);
            } else if (resultado['status'] == 'ok') {
                alertify.success(resultado['data']);
                $("#posicion").val("");
                $("#contenido").val("");
                $("#posicion").focus();
                gets_tabla();
            }
        },
        error: function (xhr) { // if error occured
            alertify.set('notifier', 'position', 'top-center');
            alertify.error('<strong>Ha ocurrido el siguiente error:</strong><br>' + xhr.statusText);
        }
    });
});

function gets_tabla() {
    datos = {
        'tabla': 'banners_platynum'
    };
    $.ajax({
        type: 'POST',
        url: '/banners/gets_tabla/',
        data: datos,
        beforeSend: function () {
            $("#tabla").html("<h1 class='text-center'><i class='fa fa-refresh fa-spin'></i></h1>");
        },
        success: function (data) {
            $("#tabla").html(data);
        },
        error: function (xhr) { // if error occured
            alertify.set('notifier', 'position', 'top-center');
            alertify.error('<strong>Ha ocurrido el siguiente error:</strong><br>' + xhr.statusText);
        }
    });
}

