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