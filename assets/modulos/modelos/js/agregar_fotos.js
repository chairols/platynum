/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {
    gets_archivos();
    
    $('#dz1').dropzone({
        url: '/modelos/agregar_fotos_ajax/',
        margin: 20,
        allowedFileTypes: 'image.*, pdf',
        params:{
            'action': 'save',
            'idmodelo': $("#idmodelo").val()
        },
        uploadOnDrop: true,
        uploadOnPreview: false,
        success: function(res, index){
            console.log(res, index);
            gets_archivos();
        }
    });
});

function gets_archivos() {
    datos = {
        'idmodelo': $("#idmodelo").val()
    };
    $.ajax({
        type: 'POST',
        url: '/modelos/gets_archivos/',
        data: datos,
        beforeSend: function () {
            $("#archivos").html('<h1 class="text-center"><i class="fa fa-refresh fa-spin"></i></h1>');
        },
        success: function (data) {
            $("#archivos").html(data);
        },
        error: function (xhr) { // if error occured
            $("#archivos").html(xhr.responseText);
            console.log(xhr);
            
            $.notify('<strong>Ha ocurrido el siguiente error:</strong><br>' + xhr.statusText,
                    {
                        type: 'danger',
                        allow_dismiss: false
                    });
        }
    });
}