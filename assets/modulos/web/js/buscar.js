$("#buscar").click(function() {
    datos = {
        'colordepelo': $("#colordepelo").val(),
        'altura': $("#altura").val(),
        'medidas1': $("#medidas1").val(),
        'barrio': $("#barrio").val(),
        'ciudad': $("#ciudad").val()
    };
    
    $.ajax({
        type: 'POST',
        url: '/web/buscador/',
        data: datos,
        beforeSend: function () {
            
        },
        success: function (data) {
            $("#resultado").html(data);
        },
        error: function (xhr) { // if error occured
            
        }
    });
});