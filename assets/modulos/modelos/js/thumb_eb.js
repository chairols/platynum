$(document).ready(function () {
    /*
     $("#image").cropper({
     //dragMode: 'move'
     cropBoxResizable: false,
     data: {
     width: 185,
     height: 255
     
     }
     });*/
    $("#image").cropper({
        aspectRatio: 80 / 110,
        strict: true,
        autoCrop: true,
        movable: false,
        scalable: false,
        cropBoxMovable: true,
        cropBoxResizable: false,
        minCropBoxWidth: 80,
        minCropBoxHeight: 110
        
    });
});

function crop() {
    $("#image").cropper('getCroppedCanvas').toBlob(function (blob) {
        var formData = new FormData();

        formData.append('idmodelo', $("#idmodelo").val());
        formData.append('idfoto', $("#idfoto").val());
        formData.append('croppedImage', blob);


        $.ajax('/modelos/crear_thumb/', {
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function () {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success('Se creó el Thumb correctamente.');
            },
            error: function () {
                alertify.set('notifier', 'position', 'top-right');
                alertify.error('No se pudo crear el Thumb');
            }
        });
    });
}