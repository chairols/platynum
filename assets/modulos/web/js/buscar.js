$("#buscar").click(function() {
    datos = {
        'colordepelo': $("#colordepelo").val(),
        'altura': $("#altura").val(),
        'medidas1': $("#medidas1").val(),
        'barrio': $("#barrio").val(),
        'ciudad': $("#ciudad").val(),
        /*
         * van varias variables aca
         */
        'a_domicilio': $("#a_domicilio").val(),
        'a_hotel': $("#a_hotel").val(),
        'con_lugar': $("#con_lugar").val(),
        'con_email': $("#con_email").val(),
        /*
         *  Falta con video
         */
        'viaja_argentina': $("#viaja_argentina").val(),
        'visa_usa': $("#visa_usa").val(),
        'idiomas': $("#idiomas").val()
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