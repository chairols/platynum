$(document).ready(function () {
    $('.datepicker').datepicker({
        autoclose: true
    })

    $('.select2').select2();

    CKEDITOR.replace('descripcion');
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
    CKEDITOR.replace('editor3');

});

$("#whatsapp1").click(function() {
    console.log(this);
});

$("#agregar").click(function () {
    for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
    }

    datos = {
        // Datos personales
        'nombre_real': $("#nombre_real").val(),
        'documento': $("#documento").val(),
        'apellido': $("#apellido").val(),
        'fecha_nacimiento': $("#fecha_nacimiento").val(),

        // Nombre de publicación
        'nombre': $("#nombre").val(),
        'perfil': $("#perfil").val(),
        'membresia': $("#membresia").val(),
        'ranking': $("#ranking").val(),

        // Datos de publicación
        'altura': $("#altura").val(),
        'alturapareja': $("#alturapareja").val(),
        'medidas1': $("#medidas1").val(),
        'medidas2': $("#medidas2").val(),
        'medidas3': $("#medidas3").val(),
        'medidaspareja': $("#medidaspareja").val(),
        'peso': $("#peso").val(),
        'colordepelo': $("#colordepelo").val(),
        'colordeojos': $("#colordeojos").val(),
        'colordepiel': $("#colordepiel").val(),
        'idioma1': $("#idioma1").val(),
        'idioma2': $("#idioma2").val(),
        'idioma3': $("#idioma3").val(),
        'idioma4': $("#idioma4").val(),
        'descripcion': $("#descripcion").val(),

        // Datos de contacto
        'prefijo1': $("#prefijo1").val(),
        'telefono1': $("#telefono1").val(),
        // 'mensaje1': $("#mensaje1").val(),
        // 'whatsapp1': $("#whatsapp1").val(),
        // 'llamadaprivada1': $("#llamadaprivada1").val(),
        'prefijo2': $("#prefijo2").val(),
        'telefono2': $("#telefono2").val(),
        // 'mensaje2': $("#mensaje2").val(),
        // 'whatsapp2': $("#whatsapp2").val(),
        // 'llamadaprivada2': $("#llamadaprivada2").val(),
        'prefijo3': $("#prefijo3").val(),
        'telefono3': $("#telefono3").val(),
        // 'mensaje3': $("#mensaje3").val(),
        // 'whatsapp3': $("#whatsapp3").val(),
        // 'llamadaprivada3': $("#llamadaprivada3").val(),
        'email': $("#email").val(),
        'sitioweb': $("#sitioweb").val(),
        'email_privado': $("#email_privado").val(),

        // Datos de ubicación y disponibilidad
        'pais': $("#pais").val(),
        'provincia': $("#provincia").val(),
        'ciudad': $("#ciudad").val(),
        'barrio': $("#barrio").val(),
        'proximidad': $("#proximidad").val(),
        'fulltime': $("#fulltime").val(),
        'ciudad_exterior': $("#ciudad_exterior").val(),
        'disponible': $("#disponible").val(),

        // Secciones
        // 'publica_masajes': $("#publica_masajes").val(),
        // 'publica_fantasias': $("#publica_fantasias").val(),
        // 'publica_maduras': $("#publica_maduras").val(),
        'observaciones': $("#editor1").val(),
        // 'con_lugar': $("#con_lugar").val(),
        // 'a_domicilio': $("#a_domicilio").val(),
        // 'a_hotel': $("#a_hotel").val(),
        // 'fuma': $("#fuma").val(),
        // 'molesta': $("#molesta").val(),
        // 'baila': $("#baila").val(),
        // 'ho': $("#ho").val(),
        // 'mu': $("#mu").val(),
        // 'ho_mu': $("#ho_mu").val(),
        // 'viaja': $("#viaja").val(),
        // 'visa_usa': $("#visa_usa").val(),

        // EscortsBaires
        'descripcion_ebcom': $("#editor2").val(),
        'comidas': $("#comidas").val(),
        'hobbies': $("#hobbies").val(),
        'musica': $("#musica").val(),
        'deportes': $("#deportes").val(),
        'nogusta': $("#nogusta").val(),
        'personalidad': $("#personalidad").val(),
        'duermo': $("#duermo").val(),
        'lugares': $("#lugares").val(),
        'descripcion_ebcomar': $("#editor3").val(),
        'comidas2': $("#comidas2").val(),
        'hobbies2': $("#hobbies2").val(),
        'musica2': $("#musica2").val(),
        'deportes2': $("#deportes2").val(),
        'nogusta2': $("#nogusta2").val(),
        'personalidad2': $("#personalidad2").val(),
        //'duermo2': $("#duermo2").val(),   No está en base de datos
        'lugares2': $("#lugares2").val()

    };
    
    if($("#mensaje1").is(":checked")) {
        datos['mensaje1'] = 'on';
    } else {
        datos['mensaje1'] = 'off';
    }
    
    if($("#whatsapp1").is(":checked")) {
        datos['whatsapp1'] = 'on';
    } else {
        datos['whatsapp1'] = 'off';
    }
    
    if($("#llamadaprivada1").is(":checked")) {
        datos['llamadaprivada1'] = 'on';
    } else {
        datos['llamadaprivada1'] = 'off';
    }
    
    if($("#mensaje2").is(":checked")) {
        datos['mensaje2'] = 'on';
    } else {
        datos['mensaje2'] = 'off';
    }
    
    if($("#whatsapp2").is(":checked")) {
        datos['whatsapp2'] = 'on';
    } else {
        datos['whatsapp2'] = 'off';
    }
    
    if($("#llamadaprivada2").is(":checked")) {
        datos['llamadaprivada2'] = 'on';
    } else {
        datos['llamadaprivada2'] = 'off';
    }
    
    if($("#mensaje3").is(":checked")) {
        datos['mensaje3'] = 'on';
    } else {
        datos['mensaje3'] = 'off';
    }
    
    if($("#whatsapp3").is(":checked")) {
        datos['whatsapp3'] = 'on';
    } else {
        datos['whatsapp3'] = 'off';
    }
    
    if($("#llamadaprivada3").is(":checked")) {
        datos['llamadaprivada3'] = 'on';
    } else {
        datos['llamadaprivada3'] = 'off';
    }
    
    if($("#publica_masajes").is(":checked")) {
        datos['publica_masajes'] = 'on';
    } else {
        datos['publica_masajes'] = 'off';
    }
    
    if($("#publica_fantasias").is(":checked")) {
        datos['publica_fantasias'] = 'on';
    } else {
        datos['publica_fantasias'] = 'off';
    }
    
    if($("#publica_maduras").is(":checked")) {
        datos['publica_maduras'] = 'on';
    } else {
        datos['publica_maduras'] = 'off';
    }
    
    if($("#con_lugar").is(":checked")) {
        datos['con_lugar'] = 'on';
    } else {
        datos['con_lugar'] = 'off';
    }
    
    if($("#a_domicilio").is(":checked")) {
        datos['a_domicilio'] = 'on';
    } else {
        datos['a_domicilio'] = 'off';
    }
    
    if($("#a_hotel").is(":checked")) {
        datos['a_hotel'] = 'on';
    } else {
        datos['a_hotel'] = 'off';
    }
    
    if($("#fuma").is(":checked")) {
        datos['fuma'] = 'on';
    } else {
        datos['fuma'] = 'off';
    }
    
    if($("#molesta").is(":checked")) {
        datos['molesta'] = 'on';
    } else {
        datos['molesta'] = 'off';
    }
    
    if($("#baila").is(":checked")) {
        datos['baila'] = 'on';
    } else {
        datos['baila'] = 'off';
    }
    
    if($("#ho").is(":checked")) {
        datos['ho'] = 'on';
    } else {
        datos['ho'] = 'off';
    }
    
    if($("#mu").is(":checked")) {
        datos['mu'] = 'on';
    } else {
        datos['mu'] = 'off';
    }
    
    if($("#ho_mu").is(":checked")) {
        datos['ho_mu'] = 'on';
    } else {
        datos['ho_mu'] = 'off';
    }
    
    if($("#viaja").is(":checked")) {
        datos['viaja'] = 'on';
    } else {
        datos['viaja'] = 'off';
    }
    
    if($("#visa_usa").is(":checked")) {
        datos['visa_usa'] = 'on';
    } else {
        datos['visa_usa'] = 'off';
    }
    
    $.ajax({
        type: 'POST',
        url: '/modelos/agregar_ajax/',
        data: datos,
        beforeSend: function () {
            $("#agregar").hide();
            $("#agregar_loading").show();
        },
        success: function (data) {
            resultado = $.parseJSON(data);
            if (resultado['status'] == 'error') {
                alertify.set('notifier', 'position', 'top-right');
                alertify.error(resultado['data']);
            } else if (resultado['status'] == 'ok') {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(resultado['data']);
                window.location.href = '/modelos/agregar_fotos/'+resultado['id']+'/';
            }
            $("#agregar_loading").hide();
            $("#agregar").show();
        },
        error: function (xhr) { // if error occured
            alertify.set('notifier', 'position', 'top-right');
            alertify.error('<strong>Ha ocurrido el siguiente error:</strong><br>' + xhr.statusText);
            $("#agregar_loading").hide();
            $("#agregar").show();
        }
    });
});