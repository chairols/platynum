$("#editar").click(function() {
    datos = {
        'posicion': $("#posicion").val(),
        'contenido': $("#contenido").val(),
        'tabla': $("#tabla").val(),
        'posicion_actual': $("#posicion_actual").val()
    };
    $.ajax({
        type: 'POST',
        url: '/banners/editar_ajax/',
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
                $("#posicion_actual").val($("#posicion").val());
            }
        },
        error: function (xhr) { // if error occured
            alertify.set('notifier', 'position', 'top-center');
            alertify.error('<strong>Ha ocurrido el siguiente error:</strong><br>' + xhr.statusText);
        }
    });
});