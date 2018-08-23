$(document).ready(function () {
    $('.datepicker').datepicker({
        autoclose: true
    })
    
    $('.select2').select2();
    
    CKEDITOR.replace('editor1');
});