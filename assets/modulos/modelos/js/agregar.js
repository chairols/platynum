$(document).ready(function () {
    $('.datepicker').datepicker({
        autoclose: true
    })

    $('.select2').select2();

    CKEDITOR.replace('descripcion');
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
    CKEDITOR.replace('editor3');
    
    alertify.notify(
        'sample', 
        'success', 
        5, 
        function(){  
            console.log('dismissed'); 
        }
    );
    
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
        // 'nombresitioweb': $("#nombresitioweb").val(),
        'membresia': $("#membresia").val(),
        'ranking': $("#ranking").val(),
        
        // Datos de publicación
        'altura': $("#altura").val(),
        'alturapareja': $("#alturapareja").val(),
        'medidaspareja': $("#medidaspareja").val(),
        'peso': $("#peso").val(),
        'colordepelo': $("#colordepelo").val(),
        'colordeojos': $("#colodeojos").val(),
        'colordepiel': $("#colordepiel").val(),
        'idioma1': $("#idioma1").val(),
        'idioma2': $("#idioma2").val(),
        'idioma3': $("#idioma3").val(),
        'idioma4': $("#idioma4").val(),
        'descripcion': $("#descripcion").val(),
        
        // Datos de contacto
        'prefijo1': $("#prefijo1").val(),
        // 'codigoarea1': $("#codigoarea1").val(),  -  No lo tengo en base de datos
        'telefono1': $("#telefono1").val(),
        // 'mensaje1': $("#mensaje1").val(),
        // 'whatsapp1': $("#whatsapp1").val(),
        // 'llamadaprivada1': $("#llamadaprivada1").val(),
        // 'otro1': $("#otro1").val(),
        'prefijo2': $("#prefijo2").val(),
        // 'codigoarea2': $("#codigoarea2").val(),  -  No lo tengo en base de datos
        'telefono2': $("#telefono2").val(),
        // 'mensaje2': $("#mensaje2").val(),
        // 'whatsapp2': $("#whatsapp2").val(),
        // 'llamadaprivada2': $("#llamadaprivada2").val(),
        // 'otro2': $("#otro2").val(),
        'prefijo3': $("#prefijo3").val(),
        // 'codigoarea3': $("#codigoarea3").val(),  -  No lo tengo en base de datos
        'telefono3': $("#telefono3").val(),
        // 'mensaje3': $("#mensaje3").val(),
        // 'whatsapp3': $("#whatsapp3").val(),
        // 'llamadaprivada3': $("#llamadaprivada3").val(),
        // 'otro3': $("#otro3").val(),
        'email': $("#email").val(),
        'sitioweb': $("#sitioweb").val(),
        'email_privado': $("#email_privado").val(),
        // 'tuya_tv': $("#tuya_tv").val(),
        
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
        'publica_masajes': $("#publica_masajes").val(),
        'publica_fantasias': $("#publica_fantasias").val(),
        'publica_maduras': $("#publica_maduras").val(),
        'observaciones': $("#observaciones").val(),
        'con_lugar': $("#con_lugar").val(),
        'a_domicilio': $("#a_domicilio").val(),
        'a_hotel': $("#a_hotel").val(),
        'fuma': $("#fuma").val(),
        'molesta': $("#molesta").val(),
        'baila': $("#baila").val(),
        'ho': $("#ho").val(),
        'mu': $("#mu").val(),
        'ho_mu': $("#ho_mu").val(),
        'viaja': $("#viaja").val(),
        'visa_usa': $("#visa_usa").val(),
        
        // EscortsBaires
        'comidas': $("#comidas").val(),
        'hobbies': $("#hobbies").val(),
        'musica': $("#musica").val(),
        'deportes': $("#deportes").val(),
        'nogusta': $("#nogusta").val(),
        'personalidad': $("#personalidad").val(),
        'duermo': $("#duermo").val(),
        'lugares': $("#lugares").val(),
        'comidas2': $("#comidas2").val(),
        'hobbies2': $("#hobbies2").val(),
        'musica2': $("#musica2").val(),
        'deportes2': $("#deportes2").val(),
        'nogusta2': $("#nogusta2").val(),
        'personalidad2': $("#personalidad2").val(),
        //'duermo2': $("#duermo2").val(),   No está en base de datos
        'lugares2': $("#lugares2").val()
        
    };
    $.ajax({
        type: 'POST',
        url: '/modelos/agregar_ajax/',
        data: datos,
        beforeSend: function () {

        },
        success: function (data) {
            resultado = $.parseJSON(data);
            if (resultado['status'] == 'error') {
                notifyError(resultado['data']);
            } else if (resultado['status'] == 'ok') {
                notifySuccess("Se agregó correctamente");
                document.getElementById("icono").value = "";
                document.getElementById("titulo").value = "";
                document.getElementById("menu").value = "";
                document.getElementById("href").value = "";
                document.getElementById("orden").value = "";
            }
        }
    });
});