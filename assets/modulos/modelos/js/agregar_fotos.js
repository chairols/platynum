/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {
    
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
    
}